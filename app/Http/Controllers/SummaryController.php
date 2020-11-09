<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\summary;
use App\member;
use App\depart;


// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class SummaryController extends Controller
{


    public function summary(){
      return view('frontend.summary');
  }


    public function insert(Request $request){
      // dd($data_post);
      $data_post = [
        "orcid_id"              => $request->orcid_id,
        "pro_end_total"         => $request->pro_end_total,
        "pro_major_total"       => $request->pro_major_total,
        "pro_publish_total"     => $request->pro_publish_total,
        "util_result_academic"  => $request->util_result_academic,
        "researcher_level"      => $request->researcher_level,
        "data_auditor"          => $request->data_auditor,
      ];
      $insert = summary::insert($data_post);
      // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/

      if($insert){
        return redirect()->back()->with('success','Insert Succussfully');
      } else {
        return redirect()->back()->with('success','Insert Failed');
      }
    }


    public function table_summary(){
      // ถ้าเป็นภาษา SQL คือ select pro_code,pro_name from pop_prov orber by id,DESC limit 10
      $sl_summary  = summary::select('id','pro_end_total','pro_major_total','pro_publish_total',
                                     'util_result_academic','data_auditor','researcher_level')->ORDERBY('id','DESC')->take(10)->get();
      $sl_member   = member::select('orcid_id','prefix','fname_th','lname_th','dep_id')->ORDERBY('orcid_id','ASC')->get();
      $sl_depart   = depart::select()->ORDERBY('depart_name','ASC')->get();

      return view('frontend.summary',[
        // "summary"    => $sl_summary,
        // "member"     => $sl_member,
        // "depart"     => $sl_depart
        "datas"    => $sl_summary,$sl_member,$sl_depart
      ]);
    }


  }
