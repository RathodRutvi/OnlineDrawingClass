@extends('layout.master')
@section('content')
<div class="card pt-2 pl-3 pr-3 mx-auto bg-light" style="width:600px ">
<h2 class="text-danger">Student Login From</h2>
<form action="#" method="POST">
@csrf
 <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="students_email" required="" id="email">
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