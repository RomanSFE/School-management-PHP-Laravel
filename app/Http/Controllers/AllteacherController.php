<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllteacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Teacher dashboard
     public function teacher_dashboard()
    {
        return view('teacherdash.teacherdashboard');
    }

    //All Teachers
    public function allteacher()
    {
        $allteacher_info=DB::table('teacher_tbl')->get();
        $manage_teacher=view('admin.allteacher')->with('all_teacher_info',$allteacher_info);
        return view('layout')->with('allteacher',$manage_teacher);
    }

    //Teacher Login
    public function teacher_login_dashboard(Request $request)
    {
        $email = $request->teachers_email;
        $password = ($request->teachers_password);
        $result=DB::table('teacher_tbl')
        ->where('teachers_email',$email)
        ->where('teachers_password',$password)
        ->first();

        if($result){
            session::put('teachers_email',$result->teachers_email);
            session::put('teachers_id',$result->teachers_id);
            return Redirect::to('/teacher_dashboard');

        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/teacher_login');
        }

    }

    //Teacher profile
    // public function teacherprofile()
    // {
    //     return view('teacherdash.teacher_view');
    // }

    //Teacher profile view
     public function teacherprofile()
    {
        $teachers_id=Session::get('teachers_id');
        $view_teacher_desc = DB::table('teacher_tbl')
        ->select('*')
        ->where('teachers_id',$teachers_id)
        ->first();

        $manage_teacher_view=view('teacherdash.teacher_view')->with('view_teacher_desc',$view_teacher_desc);
        return view('teacher_layout')->with('teacherprofile',$manage_teacher_view);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Teacher Logout
    public function teacherlogout()
    {
        Session::put('teachers_name',null);
        Session::put('teachers_id',null);

        return Redirect::to('/');
    }
    //Teacher Setting
    public function teachersetting()
    {
        $teachers_id=Session::get('teachers_id'); 
        $edit_teacher_desc = DB::table('teacher_tbl')
        ->select('*')
        ->where('teachers_id',$teachers_id)
        ->first();

        $manage_teacher_edit=view('teacherdash.teacher_setting')->with('edit_teacher_profile',$edit_teacher_desc);
        return view('teacher_layout')->with('teacher_setting',$manage_teacher_edit);
    }

    //Update Teacher Password
    public function updatetecpassword(Request $request){

        $teachers_id=Session::get('teachers_id');
        $data=array();
            $data['teachers_password']=$request->teachers_password;

            DB::table('teacher_tbl')
             ->where('teachers_id',$teachers_id)
             ->update($data);

            Session::put('exception','Password update successfully..!');
            return Redirect::to('/teacher_setting');

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
