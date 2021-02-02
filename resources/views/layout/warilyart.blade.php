@extends('layout.master')
@section('content')

<div class="contener-fluid pt-2 pl-4  mx-auto bg-light" style="width:1000px">
<div class="row"> 
  <div class="col"><img src="img/warilyart.jpg" width="900" height="300" />
  <div class="text-danger">warily art </div>
  </div>
 </div>
 @foreach($arts as $art)
 <hr style="height:10px">
  <div class="row"> 
   <div class="col">
   <h4 class="text-danger">{{$art->module}}</h4>
   </div>
  </div>
  <div class="row"> 
   <div class="col">
   <div class="text-info">{{$art->Description}}<div>
   </div>
  </div>
  <div class="row"> 
   <div class="col">
   <img src="{{asset('/img/'.$art->image)}}" width="350" height="300" />
   </div>
  </div>
  
  <form action="{{route('submit_warily_work')}}"  enctype="multipart/form-data" method="POST">
  @csrf
  <input type="hidden" name="student_id" value="{{$student_id}}">
  <div class="row pt-2"> 
   <div class="col-md-8"><input class="" type="file" name="file"></div>
   <div class="col-md-4"><button type="submit" class="btn btn-sm btn-danger">AddWork</button>
  <button type="button" class="btn btn-sm btn-danger">Delect</button></div>
  </div>
  </form>
  @endforeach
</div>
@endsection