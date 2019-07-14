@extends('layout')
@section('content')


    <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Roll</th>
                          <th>Phone</th>
                          <th>Class</th>
                          <th>Image</th>
                          <!-- <th>Email</th> -->
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($playstudent_info as $v_student)
                      <tr>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td>
                          	 @if($v_student->student_class==1)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Play'}}</span></p>
                          	 @elseif($v_student->student_class==2)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Nursery'}}</span></p>
                          	 @elseif($v_student->student_class==3)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'One'}}</span></p>
                          	 @elseif($v_student->student_class==4)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Two'}}</span></p>
                          	 @elseif($v_student->student_class==5)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Three'}}</span></p>
                          	 @elseif($v_student->student_class==6)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Four'}}</span></p>
                          	 @elseif($v_student->student_class==7)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Five'}}</span></p>
                          	 @elseif($v_student->student_class==8)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Six'}}</span></p>
                          	 @elseif($v_student->student_class==9)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Seven'}}</span></p>
                          	 @elseif($v_student->student_class==10)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Eight'}}</span></p>
                          	 @elseif($v_student->student_class==11)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Nine'}}</span></p>
                          	 @elseif($v_student->student_class==12)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Ten'}}</span></p>
                          	 @endif
                          </td>
                          <td><img src="{{URL::to($v_student->student_image)}}" height="70" width="70" style="border-radius: 50%;"></td>
                           
                          
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection