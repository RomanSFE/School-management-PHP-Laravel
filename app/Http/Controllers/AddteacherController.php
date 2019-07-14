<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AddteacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Add Teacher
    public function addteacher()
    {
        return view('admin.addteacher');
    }
    //Save Teacher
    public function saveteacher(Request $request)
    {
        $data=array();
            $data['teachers_name']=$request->teachers_name;
            $data['teachers_phone']=$request->teachers_phone;
            $data['teachers_email']=$request->teachers_email;
            $data['teachers_password']=$request->teachers_password;
            $data['teachers_balance']=$request->teachers_balance;
            $data['teachers_dept']=$request->teachers_dept;
            $data['teachers_extra']=$request->teachers_extra;
            
            // $data['student_class']=$request->student_class;
            $image=$request->file('teachers_image');

            if($image) {
                $image_name=str_random(20);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);

                if($success) {
                    $data['teachers_image']=$image_url;
                    DB::table('teacher_tbl')->insert($data);
                    Session::put('exception','Teacher added successfully..!');
                    return Redirect::to('/addteacher');
                }
            }
            $data['image']=$image_url;
                    DB::table('teacher_tbl')->insert($data);
                    Session::put('exception','Teacher added successfully..!');
                    return Redirect::to('/addteacher');

                    DB::table('teacher_tbl')->insert($data);
                    Session::put('exception','Teacher added successfully..!');
                    return Redirect::to('/addteacher');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
