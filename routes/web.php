<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/welcome','AllPageController@welcome');
//gallery
Route::get('/gallery', function () {
    return view('gallery');
});
//About
Route::get('/about', function () {
    return view('about');
});
//Admission
Route::get('/admission', function () {
    return view('admission');
});
//Admission
Route::get('/contact', function () {
    return view('contact');
});
//student login
Route::get('/student_login', function () {
    return view('student_login');
 });
//teacher login
Route::get('/teacher_login', function () {
    return view('teacher_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//For admin login Controller
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

//For Logout
Route::get('/logout','AdminController@logout');

//Add student
Route::get('/addstudent','AddstudentsController@addstudents');
Route::post('/save_student','AddstudentsController@savestudent');

//All student
Route::get('/allstudent','AllstudentsController@allstudents');
//Delete Student All student page
Route::get('/student_delete/{student_id}','DeleteController@delete');
//View Student All student page
Route::get('/viewstudent/{student_id}','ViewController@view');
//Edit Student All student page
Route::get('/editstudent/{student_id}','EditController@edit');
//Update Student All student page
Route::post('/update_student/{student_id}','UpdateStudentController@studentupdate');

//Tution fee
Route::get('/tutionfee','TutionfeeController@tutionfee');

//Play
Route::get('/play','PlayController@play');
Route::get('/nursery','NurseryController@nursery');
Route::get('/one','OneController@one');
Route::get('/two','TwoController@two');
Route::get('/three','ThreeController@three');
Route::get('/four','FourController@four');
Route::get('/five','FiveController@five');
Route::get('/six','SixController@six');
Route::get('/seven','SevenController@seven');
Route::get('/eight','EightController@eight');
Route::get('/nine','NineController@nine');
Route::get('/ten','TenController@ten');

//All Teacher
Route::get('/allteacher','AllteacherController@allteacher');
//Teacher login
Route::post('/teacherlogin','AllteacherController@teacher_login_dashboard');
Route::get('/teacher_dashboard','AllteacherController@teacher_dashboard');
//Teacher Logout
Route::get('/teacher_logout','AllteacherController@teacherlogout');
//Teacher Setting
Route::get('/teacher_setting','AllteacherController@teachersetting');
Route::post('/update_tec_pass','AllteacherController@updatetecpassword');
//Teacher profile
Route::get('/teacher_profile','AllteacherController@teacherprofile');
//Add Teacher
Route::get('/addteacher','AddteacherController@addteacher');
Route::post('/save_teacher','AddteacherController@saveteacher');
//view profile
Route::get('/viewprofile','AdminController@viewprofile');
//setting
Route::get('/setting','AdminController@setting');
   