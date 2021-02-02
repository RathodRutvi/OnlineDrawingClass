@extends('admin.admin')
@section('content')
<div class="container-fluid">
<div class="row pt-3">
          <div class="col">
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">Students Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                      
                     <th>Name</th>
                      <th>Email</th>
                      <th>Standard</th>
                      <th>Birthday</th>
                      <th>City</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Course</th>
                      <th>Fee</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                    <tr>
                      
                      <td>{{$student->students_name}}</td>
                      <td>{{$student->students_email}}</td>
                      @if($student->students_standard=="1")
                           <td>std-1</td>
                           @elseif($student->students_standard=="2")
                           <td>std-2</td>
                           @elseif($student->students_standard=="3")
                           <td>std-3</td>
                           @elseif($student->students_standard=="4")
                           <td>std-4</td>
                           @elseif($student->students_standard=="5")
                           <td>std-5</td>
                           @elseif($student->students_standard=="6")
                           <td>std-6</td>
                           @elseif($student->students_standard=="7")
                           <td>std-7</td>
                           @elseif($student->students_standard=="8")
                           <td>std-8</td>
                           @elseif($student->students_standard=="9")
                           <td>std-9</td>
                           @elseif($student->students_standard=="10")
                           <td>std-10</td>
                      @else
                           <td></td>
                        @endif
                      <td>{{$student->students_birthday}}</td>
                        
                        @if($student->students_city==1)
                           <td>Rajkot</td>
                        @elseif($student->students_city==2)
                           <td>Ahemdabad</td>
                        @elseif($student->students_city==3)
                           <td>jamnager</td>
                        @else
                           <td></td>
                        @endif
                      <td>{{$student->students_address}}</td>
                      <td>{{$student->students_phone}}</td>

                      @if($student->students_course==1)
                           <td>Warily Panting</td>
                      @elseif($student->students_course==2)
                           <td>Madhubani Panting</td>
                      @elseif($student->students_course==3)
                           <td>Sketches</td>
                      @else
                           <td></td>
                        @endif

                        @if($student->students_fee==1)
                           <td>Rs.300 .1month</td>
                          @else
                           <td></td>
                        @endif
                      <td><button class="btn btn-info">Edit</button></td>
                      <td><button class="btn btn-danger">Delete</button></td>
                    </tr>
                   @endforeach
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</div>
@endsection