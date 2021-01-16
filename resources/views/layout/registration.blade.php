@extends('layout.master')
@section('content')
<div class="card pt-2 pl-3 pr-3 mx-auto bg-light" style="width:600px ">
<h6 class="text-danger">If You join This Course Fill YourRegistration From</h6>
<h2 class="text-danger">Student Registration</h2>
<form action="{{route('store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="text"><b>Enter Full Name</label>
    <input type="text" class="form-control" placeholder="Enter Name"  name="students_name" required="" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="students_email" required="" id="email">
  </div>
  <div class="form-group">
    <label for="text">Standard:</label>
    <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="text" >selectstandard</label>
          </div>
          <select class="custom-select" name="students_standard"  required="" id="standard">
            <option selected>Choose...</option>
            <option value="1">Std-1</option>
            <option value="2">Std-2</option>
            <option value="3">Std-3</option>
            <option value="4">Std-4</option>
            <option value="5">Std-5</option>
            <option value="6">Std-6</option>
            <option value="7">Std-7</option>
            <option value="8">Std-8</option>
            <option value="9">Std-9</option>
            <option value="10">Std-10</option>
          </select>
        </div>
        <div>
  <div class="form-group">
    <label for="email">Birthday select:</label>
    <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="students_birthday" required="" id="birthday">
  </div>
  <div class="form-group">
  <label for="text">City:</label>
  <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="text"> select city</label>
          </div>
          <select class="custom-select" name="students_city" required="" id="city">
            <option selected>Choose...</option>
            <option value="1">Rajkot</option>
            <option value="2">Ahemdabad</option>
            <option value="3">jamnager</option>
          </select>
        </div>
  </div>
  <div class="form-group">
    <label for="text">Student Address:</label>
    <input type="text" class="form-control" placeholder="Enter your address" name="students_address" required="" id="address">
  </div>
  <div class="form-group">
    <label for="text">Mobile Number:</label>
    <input type="text" class="form-control" placeholder="Mobile Number" name="students_phone" required="" id="phone">
  </div>
  <div class="form-group">
  <label for="text">Course:</label>
  <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="text">course name:</label>
          </div>
          <select class="custom-select" name="students_course" required="" id="course">
            <option selected>Choose...</option>
            <option value="1">Warily Panting</option>
            <option value="2">Madhubani Panting</option>
            <option value="3">Sketches</option>
          </select>
        </div>
  </div>
  <div class="form-group">
  <label for="text">Course Fee:</label>
  <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="text">fee:</label>
          </div>
          <select class="custom-select" name="students_fee" required="" id="fee">
            <option selected>Choose...</option>
            <option value="1">300-> 1month </option>
          </select>
        </div>
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" required="" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection