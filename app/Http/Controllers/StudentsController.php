<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= DB::table('students')->get();
        return view('admin.view',compact('students'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('layout.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flag=DB::table('students')
        ->insert(["students_name"=>$request->students_name,
        "students_email"=>$request->students_email,
        "students_standard"=>$request->students_standard,
        "students_birthday"=>$request->students_birthday,
        "students_city"=>$request->students_city,
        "students_address"=>$request->students_address,
        "students_phone"=>$request->students_phone,
        "students_course"=>$request->students_course,
        "students_fee"=>$request->students_fee,
        "password"=>$request->password]);
        if($flag)
        {
            return redirect('login');
           
        }
        else
        {
         return  "not succes";
        }



    }
    public function submit_warily_work(request $request){
        
        $student_id=$request->student_id;
        $arts=DB::table('warilyart')->select("module","Description","image")->get();
       
        if($request->file){
            
            $file_name=$request->file;
            $filename = time().'.'.$file_name->getClientOriginalExtension();
            $file_name->move(public_path('students work'), $filename);

            $flag=DB::table('students_work')
            ->insert(["student_id"=>$request->student_id,
            "module"=>1,
            "image"=>$filename,
            ]);
            
        }
       // return view('signin',compact('arts','student_id'));
       
        return view('layout.warilyart',compact('arts','student_id'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
