@extends('layout.master')
@section('content')

<div class="contener-fluid pt-2 pl-4  mx-auto bg-light" style="width:1000px">
<div class="row"> 
  <div class="col"><img src="img/warilyart.jpg" width="900" height="300" />
  <div class="text-danger">warily art</div>
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
   <div class="text-info">Blow the image following stpes<div>
   </div>
  </div>
  <div class="row"> 
   <div class="col">
   <img src="{{$art->image}}" width="350" height="300" />
   </div>
  </div>
  <div class="row pt-2"> 
   <div class="col-md-8"><input class="" type="file"></div>
   <div class="col-md-2"><button type="button" class="btn btn-sm btn-danger">AddWork</button></div>
   <div class="col-md-2"><button type="button" class="btn btn-sm btn-danger">Submit</button></div>
  </div>
  @endforeach
</div>
@endsection