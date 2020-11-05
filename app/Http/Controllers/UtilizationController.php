<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\util;
use App\research;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class UtilizationController extends Controller
{


  public function util(){
    return view('frontend.util');
  }


  public function insert(Request $request){
    // dd($data_post);
    $data_post = [
      "result_pro_id"        => $request->result_pro_id,
      "result_pro_name_th"   => $request->result_pro_name_th,
      "util_type"            => $request->util_type,
      "files"                => $request->files,
      "review_status"        => $request->review_status,
    ];
    $insert = util::insert($data_post);
    // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/

    if($insert){
      return redirect()->back()->with('success','Insert Succussfully');
    } else {
      return redirect()->back()->with('success','Insert Failed');
    }
  }


  public function index2(){
    // ถ้าเป็นภาษา SQL คือ select pro_code,pro_name from pop_prov orber by id,DESC limit 10
    $sl_util  = util::select('id','result_pro_id','result_pro_name_th','result_pro_name_en',
                             'util_type','review_status')->ORDERBY('id','DESC')->take(10)->get();
    $sl_research   = research::select('pro_name_th','pro_name_en')->ORDERBY('pro_name_th','ASC')->get();

    return view('frontend.util',[
      // "summary"    => $sl_summary,
      // "member"     => $sl_member,
      // "depart"     => $sl_depart
      "datas"    => $sl_util,$sl_research
    ]);
  }


}
