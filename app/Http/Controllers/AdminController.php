<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Login Admin Dashboard Controller
     public function login_dashboard(Request $request)
    {
        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result=DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();

        if($result){
            session::put('admin_email',$result->admin_email);
            session::put('admin_id',$result->admin_id);
            return Redirect::to('/admin_dashboard');

        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        }

    }

    //Admin Logout Controller
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);

        return Redirect::to('/');
    }

    //Admin Dashboard Controller
     public function admin_dashboard(Request $request)
    {
        return view('admin.dashboard');
    }
   
    //View Profile
    public function viewprofile()
    {
        return view('admin.viewprofile');
    }
    //Profile Setting
    public function setting()
    {
        return view('admin.setting');
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
