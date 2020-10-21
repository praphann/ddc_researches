<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class MinController extends Controller
{

  public function index(){
    return view('layout.home');
  }



  public function dashboard(){
    return view('layout.dashboard');
  }


  public function member(){
    return view('frontend.member');
  }

  //
  // public function member()
  // {
  //   $gender = ['1'=> 'ชาย',
  //              '2'=> 'หญิง'
  //           ];
  //   //dd($query);
  //   return view('frontend.member',
  //     ['gender' => $gender]
  //   );
  // }
  //
  //
  //
  // public function insert(Request $request){
  //   // dd($data_post);
  //   // dd($request['0']->pro_code); เข้าไปดูข้อมูลใน array โดยเข้าถึง field ที่ชื่อ pro_code
  //   $data_post = [
  //     "title_name"  => $request->title_name,
  //     "first_name"  => $request->first_name,
  //     "last_name"   => $request->last_name,
  //     "gender"      => $request->gender,
  //     "birthdate"   => $request->birthdate,
  //     "division"    => $request->division,
  //     "position"    => $request->position,
  //     "file"        => $request->file,
  //     "date_entry"  => date('y-m-d')
  //   ];
  //   $insert = person::insert($data_post);
  //   // $insert = DB::table('person_ddc_table')->insert($data_post);  /*person_ddc_table คือ = ชื่อ table*/
  //
  //   if($insert){
  //     return redirect()->back()->with('success','Insert Succussfully');
  //   } else {
  //     return redirect()->back()->with('success','Insert Failed');
  //   }
  //
  // }

}
