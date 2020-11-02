<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     protected function create(array $data)
     {

         $user =  User::create([
             'cid'           => $cid,
             'nrms_id'       => $nrms_id,
             'orcid_id'      => $orcid_id,
             'prefix'        => trim($data['prefix']),
             'fname_th'      => trim($data['fname_th']),
             'lname_th'      => trim($data['lname_th']),
             'fname_en'      => trim($data['fname_en']),
             'lname_en'      => trim($data['lname_en']),
             'birthdate'     => $data['birthdate'],
             'age'           => $data['age'],
             'gender'        => $data['gender'],
             'position'      => trim($data['position']),
             'edu_class'     => trim($data['edu_class']),
             'dep_id '       => $dep,
             'dep_address'   => $data['dep_address'],
             'tel'           => $data['tel'],
             'profile_img'   => $file_avatar,
             'email'         => $data['email'],
             'password'      => Hash::make($data['password'])
         ]);
         //$user->assignRole($data['roles']);
         $user->assignRole("researcher");
         //dd($user);
         return $user;
     }


     //ส่งค่าไป auth/register
     public function showregistrationform()
     {
         $prefix = array("นาย","นาง","นางสาว");
         $gender = array("ชาย","หญิง");
         $edu_class = array("ปริญญาตรี","ปริญญาโท","ปริญญาเอก");
         $result = DB::table('position')->select('name')->get();
         $position = array();
         foreach($result as $val) {
             array_push($position, $val->name);
         }
         $position = implode("|",$position);

         $dep = DB::table('depart')->select('id','depart_name as name')->get();

         return view('auth.register', [
             'prefix'     => $prefix,
             'gender'     => $gender,
             'edu_class'  => $edu_class,
             'position'   => $position,
             'dep'        => $dep
        ]);
    }
}
