@extends('teacher_layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Update your Password</h2>

            <p class="alert-success">
                <?php 
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception', null);
                  }
                ?>
              </p>

            <form class="forms-sample" method="post" action="{{URL::to('/update_tec_pass')}}">
              @csrf
               
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Email Password</label>
                    <input type="password" class="form-control p-input" name="teachers_password" value="{{($edit_teacher_profile->teachers_password)}}" placeholder="Teacher Password">
                </div>
                 
              
                
                <button type="submit" class="btn btn-success btn-block">Update Password</button>
            </form>
        </div>
    </div>
 </div>

@endsection