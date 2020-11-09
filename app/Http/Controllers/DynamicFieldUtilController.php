<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField_Util;
use Validator;

class DynamicFieldUtilController extends Controller
{
    public function index()
    {
     return view('frontend.dynamic_util');
    }

    public function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'result_pro_name_th.*'  => 'required',
       'util_type.*'           => 'required',
       'files.*'               => 'required'

      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $result_pro_name_th = $request->result_pro_name_th;
      $util_type = $request->util_type;
      $files = $request->files;
      for($count = 0; $count < count($result_pro_name_th); $count++)
      {
       $data = array(
        'result_pro_name_th' => $first_name[$count],
        'util_type'          => $util_type[$count],
        'files'              => $files[$count]
       );
       $insert_data[] = $data;
      }

      DynamicField_Util::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }
}
