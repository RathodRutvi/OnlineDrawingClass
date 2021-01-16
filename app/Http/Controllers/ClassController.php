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
     public function warilyart ()
     {
     
        $arts=DB::table('warilyart')->select("module","image")->get();
        return view('layout.warilyart',compact('arts'));
        
      }
      public function form ()
     {
        return view('admin.form');
     }
     public function table ()
     {
        return view('admin.tabel');
     }
     public function adminhome ()
     {
        return view('admin.adminhome');
     }
      
}
