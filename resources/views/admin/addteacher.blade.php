@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
	  <div class="card">
	      <div class="card-body">
	          <h2 class="card-title">Add Teacher</h2>

	          <p class="alert-success">
                <?php 
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception', null);
                  }
                ?>
              </p>

	          <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
	          	@csrf
	              <div class="form-group">
	                  <label for="exampleInputEmail1">Teacher Name</label>
	                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Teacher Name">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Teacher Phone</label>
	                  <input type="text" class="form-control p-input" name="teachers_phone" placeholder="Teacher Phone">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Teacher Email Address</label>
	                  <input type="email" class="form-control p-input" name="teachers_email" placeholder="Teacher Email">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Teacher Email Password</label>
	                  <input type="password" class="form-control p-input" name="teachers_password" placeholder="Teacher Password">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Teacher Provident Fund</label>
	                  <input type="text" class="form-control p-input" name="teachers_balance" placeholder="Teacher provident fund..">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">About Teacher</label>
	                  <input type="text" class="form-control p-input" name="teachers_extra" placeholder="Say something About this teacher">
	              </div>
	               
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Teacher Department</label>
	                  <select class="form-control p-input" name="teachers_dept">
	                  <option>---Select Teacher Department---</option>
	                  <option value="1">Bangla</option>
	                  <option value="2">English</option>
	                  <option value="3">Math</option>
	                  <option value="4">Physics</option>
	                  <option value="5">Chemistry</option>
	                  <option value="6">General Science</option>
	                  <option value="7">Arts</option>
	                  </select>
	              </div>
	              <div class="form-group">
	                  <label>Upload Student Image</label>
	                  <div class="row">
	                    <div class="col-12">
	                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
	                      <input type="file" class="form-control-file" id="exampleInputFile2" name="teachers_image" aria-describedby="fileHelp">
	                    </div>
	                  </div>
	              </div>
	              <button type="submit" class="btn btn-success btn-block">Add Teacher</button>
	          </form>
	      </div>
	  </div>
 </div>

@endsection