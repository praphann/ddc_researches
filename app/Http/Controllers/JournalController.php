<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\journal;
use App\research;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class JournalController extends Controller
{


  public function journal(){
    return view('frontend.journal');
  }



  public function insert(Request $request){
    // dd($data_post);
    $data_post = [
      "article_name_th"   => $request->article_name_th,
      "article_name_en"   => $request->article_name_en,
      "journal_name_th"   => $request->journal_name_th,
      "journal_name_en"   => $request->journal_name_en,
      "publish_years"     => $request->publish_years,
      "publish_no"        => $request->publish_no,
      "publish_volume"    => $request->publish_volume,
      "publish_page"      => $request->publish_page,
      "doi_number"        => $request->doi_number,
      "contribute"        => $request->contribute,
      "corres"            => $request->corres,
      "result_pro_id"     => $request->result_pro_id,
      // "files"             => $request->files,
      // "date_entry"        => date('y-m-d')
    ];
    $insert = journal::insert($data_post);
    // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/

    if($insert){
      return redirect()->back()->with('success','การบันทึกข้อมูลของคุณเสร็จสิ้นแล้ว');
    } else {
      return redirect()->back()->with('success','การบันทึกข้อมูลของคุณไม่สำเร็จ !!!');
    }
  }



  public function table_journal(){
    // ถ้าเป็นภาษา SQL คือ select pro_code,pro_name from pop_prov orber by id,DESC limit 10
    $query  = research::select('id','pro_name_en')->get();
    $query2 = journal::select('id','article_name_th','journal_name_th','publish_years','corres')
                     ->ORDERBY('id','DESC')->take(10)->get();
    //dd($query);
    return view('frontend.journal',
      ['journal_5' => $query,
       'journals' => $query2,]
    );
  }



}
