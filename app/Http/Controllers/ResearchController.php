<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\research;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class ResearchController extends Controller
{


  public function research(){
    return view('frontend.research');
  }



  public function insert(Request $request){
    // dd($data_post);
    $data_post = [
      "pro_name_th"       => $request->pro_name_th,
      "pro_name_en"       => $request->pro_name_en,
      "pro_position"      => $request->pro_position,
      "pro_co_researcher" => $request->pro_co_researcher,
      "pro_start_date"    => $request->pro_start_date,
      "pro_end_date"      => $request->pro_end_date,
      "publish_status"    => $request->publish_status,
      "files"             => $request->files,
      "date_entry"        => date('y-m-d')
    ];
    $insert = research::insert($data_post);
    // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/

    if($insert){
      return redirect()->back()->with('success','Insert Succussfully');
    } else {
      return redirect()->back()->with('success','Insert Failed');
    }
  }



  public function index2(){
    // ถ้าเป็นภาษา SQL คือ select pro_code,pro_name from pop_prov orber by id,DESC limit 10
    $query = research::select('id','pro_name_th','pro_start_date','pro_end_date','publish_status',)
                     ->ORDERBY('id','DESC')->take(10)->get();
    //dd($query);
    return view('frontend.research',
      ['research' => $query]
    );
  }



}
