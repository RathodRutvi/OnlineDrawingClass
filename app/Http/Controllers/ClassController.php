<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function master ()
     {
        return view('layout.master');
     }
     public function home ()
     {
        return view('layout.home');
     }
     public function activity ()
     {
        return view('layout.activity');
     }
     public function gallery ()
     {
        return view('layout.gallery');
     }
     public function gallery_sketches()
     {
        return view('layout.gallery_sketches');
     }
     public function registration ()
     {
        return view('layout.registration');
     }
     public function login ()
     {
        return view('layout.login');
     }
   //public function adminwarily ()
     //{
     // $arts=DB::table('warilyart')->select("module","Description","image")->get();
      //return view('layout.warilyart',compact('arts'));
        
        
     // }
      
     public function view ()
     {
        
        return view('admin.view');
     }
     public function works ()
     {
      $arts=DB::table('students_work')->select("module","image")->get();
        return view('admin.studentsworks',compact('arts'));
     }
    public function warilyart(request $request){
      if($request->students_email && $request->password){
         $check_present=DB::table('students')->where(['students_email'=>$request->students_email, 'password'=>$request->password])->first();
         $student_id=$check_present->id;
         if($check_present){
            $arts=DB::table('warilyart')->select("module","Description","image")->get();
            return view('layout.warilyart',compact('arts','student_id'));
         }
      }
    }
      
}
