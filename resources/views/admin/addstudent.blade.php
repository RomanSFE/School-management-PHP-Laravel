@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
	  <div class="card">
	      <div class="card-body">
	          <h2 class="card-title">Add Student</h2>

	          <p class="alert-success">
                <?php 
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception', null);
                  }
                ?>
              </p>

	          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
	          	@csrf
	              <div class="form-group">
	                  <label for="exampleInputEmail1">Student Name</label>
	                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Student Name">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Roll</label>
	                  <input type="text" class="form-control p-input" name="student_roll" placeholder="Student Roll">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Father Name</label>
	                  <input type="text" class="form-control p-input" name="student_fathername" placeholder="Student Father Name">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Mother Name</label>
	                  <input type="text" class="form-control p-input" name="student_mothername" placeholder="Student Mother Name">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Phone Number</label>
	                  <input type="text" class="form-control p-input" name="student_phone" placeholder="Student Phone">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Email Address</label>
	                  <input type="email" class="form-control p-input" name="student_email" placeholder="Student Email">
	              </div>
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Email Password</label>
	                  <input type="password" class="form-control p-input" name="student_password" placeholder="Student Password">
	              </div>
	               
	              <div class="form-group">
	                  <label for="exampleInputPassword1">Student Class</label>
	                  <select class="form-control p-input" name="student_class">
	                  <option>---Select Student Class---</option>
	                  <option value="1">Play</option>
	                  <option value="2">Nursery</option>
	                  <option value="3">One</option>
	                  <option value="4">Two</option>
	                  <option value="5">Three</option>
	                  <option value="6">Four</option>
	                  <option value="7">Five</option>
	                  <option value="8">Six</option>
	                  <option value="9">Seven</option>
	                  <option value="10">Eight</option>
	                  <option value="11">Nine</option>
	                  <option value="12">Ten</option>
	                  </select>
	              </div>
	              <div class="form-group">
	                  <label>Upload Student Image</label>
	                  <div class="row">
	                    <div class="col-12">
	                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
	                      <input type="file" class="form-control-file" id="exampleInputFile2" name="student_image" aria-describedby="fileHelp">
	                    </div>
	                  </div>
	              </div>
	              <button type="submit" class="btn btn-success btn-block">Add Student</button>
	          </form>
	      </div>
	  </div>
 </div>

@endsection