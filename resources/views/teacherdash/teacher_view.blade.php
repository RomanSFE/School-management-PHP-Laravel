@extends('teacher_layout')

@section('content')


  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-6">
        <div class="card-body avatar">
          <h2 class="card-title">Teacher Info</h2>
          <img src="{{URL::to($view_teacher_desc->teachers_image)}}" alt="">
          <p class="name">Name: {{$view_teacher_desc->teachers_name}}</p>
          <p class="name">Phone: {{$view_teacher_desc->teachers_phone}}</p>
          <!-- <a class="email" href="#">johndoe@gmail.com</a> -->
          <a class="number" style="font-size: 20px; color: green; font-weight: 700;">Balance: {{$view_teacher_desc->teachers_balance}}</a>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body overview">
          
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p class="name">{{$view_teacher_desc->teachers_extra}}</p>
          </div>
      
        </div>
      </div>
    </div>
  </div>
     

@endsection