@extends('admin.admin')
@section('content')

<div class="contener-fluid pt-2 pl-4  mx-auto bg-light" style="width:1000px">
<div class="row"> 
 
  <div class="text-danger"><h2>WarilyArt Students Work</h2> </div>
  
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
   <img src="{{asset('/students work/'.$art->image)}}" width="350" height="300" />
   </div>
  </div>
   
  @endforeach
</div>

@endsection