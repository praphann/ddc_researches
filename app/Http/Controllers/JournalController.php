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
      "files"             => $request->files,
      "date_entry"        => date('Y-m-d H:i:s')
    ];
      //  --  UPLOAD FILE journal_form  --
    if ($request->file('files')->isValid()) {
        //TAG input [type=file] ดึงมาพักไว้ในตัวแปรที่ชื่อ files
        $file=$request->file('files');
        //ตั้งชื่อตัวแปร $file_name เพื่อเปลี่ยนชื่อ + นามสกุลไฟล์
        $name='file_'.date('dmY_His');
        $file_name = $name.'.'.$file->getClientOriginalExtension();
        // upload file ไปที่ PATH : public/file_upload
        $path = $file->storeAs('public/file_upload',$file_name);
        $data_post['files'] = $file_name;
  }


    $insert = journal::insert($data_post);
    // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/

    if($insert){
      return redirect()->back()->with('success','การบันทึกข้อมูลของคุณเสร็จสิ้นแล้ว');
    } else {
      return redirect()->back()->with('success','การบันทึกข้อมูลของคุณไม่สำเร็จ !!!');
    }
  }
  //  -- END INSERT --



  //  -- SELECT into DataTable --
  public function table_journal(){
    // ถ้าเป็นภาษา SQL คือ select pro_code,pro_name from pop_prov orber by id,DESC limit 10
    $query  = research::select('id','pro_name_en')->get();
    
    $query2 = journal::select('id','article_name_th','journal_name_th','publish_years','corres')
                     ->ORDERBY('id','DESC')->get();
                     // ->ORDERBY('id','DESC')->take(10)->get();

    //dd($query2);
    return view('frontend.journal',
      ['journal_5' => $query,
       'journals' => $query2,]
    );
  }
  //  -- END SELECT into DataTable --



  //  -- EDIT --
  public function edit_journal_form(Request $request){
    $edit = journal::where('id' , $request->id)->first();

     return view('frontend.research_edit',
       ['data' => $edit]  /*นำตัวแปร data ไปใส่ใน research_edit.blade.php  คือ  value = "{{ $data->id }}"*/
    );
  }
  //  -- END EDIT --



  //  -- SAVE --
  public function save_journal_form(Request $request){
    // dd($request);
    $update = research::where('id',$request->id)
                      ->update(['pro_name_th'     => $request->pro_name_th,
                                'pro_name_en'     => $request->pro_name_en,
                                'pro_position'    => $request->pro_position,
                                'pro_co_researcher' => $request->pro_co_researcher,
                                'pro_start_date'  => $request->pro_start_date,
                                'pro_end_date'    => $request->pro_end_date,
                                'publish_status'  => $request->publish_status
                              ]);

    if($update){
       return redirect()->back()->with('success','การบันทึกข้อมูลของคุณเสร็จสิ้นแล้ว');
    } else {
       return redirect()->back()->with('success','การบันทึกข้อมูลของคุณไม่สำเร็จ !!!');
    }
  }
  //  -- END SAVE --

}
