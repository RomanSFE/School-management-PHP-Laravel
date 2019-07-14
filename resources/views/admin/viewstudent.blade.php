@extends('layout')

@php 

  function convert_dept($value){

    $values=[
        1=>'Play',
        2=>'Nursery',
        3=>'One',
        4=>'Two',
        5=>'Three',
        6=>'Four',
        7=>'Five',
        8=>'Six',
        9=>'Seven',
        10=>'Eight',
        11=>'Nine',
        12=>'Ten',
    ];
    return $values[$value];
  
}
@endphp

@section('content')


  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-6">
        <div class="card-body avatar">
          <h2 class="card-title">Student Info</h2>
          <img src="{{URL::to($view_student_desc->student_image)}}" alt="">
          <p class="name">{{$view_student_desc->student_name}}</p>
          <p class="designation" style="font-size: 15px;">Class: {{convert_dept($view_student_desc->student_class)}}</p>
          <!-- <a class="email" href="#">johndoe@gmail.com</a> -->
          <a class="number" style="font-size: 15px;">Roll: {{$view_student_desc->student_roll}}</a>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body overview">
          
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The total information of this student are given below</p>
          </div>
          <div class="info-links">
            <a class="website">
              <i class="icon-globe icon">Father Name: </i>
              <span style="font-size: 16px;">{{$view_student_desc->student_fathername}}</span>
            </a>
            <a class="social-link">
              <i class="icon-social-facebook icon">Mother Name: </i>
              <span style="font-size: 16px;">{{$view_student_desc->student_mothername}}</span>
            </a>
            <a class="social-link"">
              <i class="icon-social-linkedin icon">Phone Number: </i>
              <span style="font-size: 16px;">{{$view_student_desc->student_phone}}</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
     

@endsection