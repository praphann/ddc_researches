<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\research;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class ResearchController extends Controller
{


  public function research(){
    return view('frontend.research');
  }


  //  -- INSERT --
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
      "date_entry"        => date('Y-m-d H:i:s')
    ];
      //  --  UPLOAD FILE research_form  --
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

    $insert = research::insert($data_post);
    // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/

    if($insert){
      return redirect()->back()->with('success','การบันทึกข้อมูลของคุณเสร็จสิ้นแล้ว');
    } else {
      return redirect()->back()->with('failure','การบันทึกข้อมูลของคุณไม่สำเร็จ !!!');
    }
  }
  //  -- END INSERT --



  //  -- SELECT into DataTable --
  public function table_research(){
    // ถ้าเป็นภาษา SQL คือ select pro_code,pro_name from pop_prov orber by id,DESC limit 10
    $query = research::select('id','pro_name_th','pro_name_en','pro_position',
                              'pro_start_date','pro_end_date','publish_status')
                     ->ORDERBY('id','DESC')->get();

    $query2 = [1=> 'ผู้วิจัยหลัก',
               2=> 'ผู้วิจัยหลัก-ร่วม',
               3=> 'ผู้วิจัยร่วม',
               4=> 'ผู้ช่วยวิจัย',
               5=> 'ที่ปรึกษาโครงการ'
              ];

    $query3 = [1=> '1', 2=> '2', 3=> '3',
               4=> '4', 5=> '5', 6=> '6',
               7=> '7', 8=> '8', 9=> '9',
               10=> '10'
              ];

     $query4 = [1=> 'ใช่',
                2=> 'ไม่ใช่'
               ];

    //dd($query);
    return view('frontend.research',
      ['research'          => $query,
       'pro_position'      => $query2,
       'pro_co_researcher' => $query3,
       'publish_status'    => $query4,
      ]
    );
  }
  //  -- END SELECT into DataTable --



  //  -- EDIT --
  public function edit_research_form(Request $request){
    $edit = research::where('id' , $request->id)->first();

    $edit2 = [1=> 'ผู้วิจัยหลัก',
              2=> 'ผู้วิจัยหลัก-ร่วม',
              3=> 'ผู้วิจัยร่วม',
              4=> 'ผู้ช่วยวิจัย',
              5=> 'ที่ปรึกษาโครงการ'
             ];

    $edit3 = [1=> '1', 2=> '2', 3=> '3',
              4=> '4', 5=> '5', 6=> '6',
              7=> '7', 8=> '8', 9=> '9',
              10=> '10'
             ];

     $edit4 = [1=> 'ใช่',
               2=> 'ไม่ใช่'
              ];

     return view('frontend.research_edit',
       ['data'    => $edit,
        'data2'   => $edit2,
        'data3'   => $edit3,
        'data4'   => $edit4,
       ]  /*นำตัวแปร data ไปใส่ใน research_edit.blade.php  คือ  value = "{{ $data->id }}"*/
    );
  }
  //  -- END EDIT --



  //  -- SAVE --
  public function save_research_form(Request $request){
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
       return redirect()->back()->with('failure','การบันทึกข้อมูลของคุณไม่สำเร็จ !!!');
    }
  }
  //  -- END SAVE --

}
