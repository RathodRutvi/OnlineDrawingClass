@extends('admin.admin')
@section('content')
<div class="container-fluid">
<div class="card card-primary pt-3">
              <div class="card-header">
                <h3 class="card-title">Add module</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{('addstore')}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Module</label>
                    <input type="text" name="module" class="form-control" id="module1" placeholder="Enter module-number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="Description" class="form-control" id="module1" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                    <input type="file" name="image">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
@endsection