@extends('layout.master')
@section('content')
<div class="contener-fluid">
              
            <div class=row>
              
            <div class=" col-lg-2 col-sm-2 col-md-2">
            <div class="bg-light">
            <ul class="navbar-nav">
              <li class="nav-time"><a class="nav-link text-body" herf="#"><h2><b>Works</b></h2></a></li>
              <li class="nav-item">
                <a class="navlink text-body"  href="#"><h4>Module 1</h4></a> 
                <a class="navlink text-body" href="#"><h4>Module 2</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 3</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 4</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 5</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 6</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 7</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 8</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 9</h4></a>
                <a class="navlink text-body" href="#"><h4>Module 10</h4></a>
              </li>
            </ul>
            </div>
          </div>
          <div class="col-lg-10 col-sm-2 col-md-10 col-xs-10">
            <div class="row">
              <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
              <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div id="demo" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/madhubani.png" class="img-fluid" alt="Los Angeles" width="1100" height="500">
                      <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>We had such a great time in LA!</p>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="img/warli.png" class="img-fluid" alt="Chicago" width="1100" height="500">
                      <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                      </div>   
                    </div>
                    <div class="carousel-item">
                      <img src="img/oil panting.png" class="img-fluid" alt="New York" width="1100" height="500">
                      <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div  class="col-lg-3 col-sm-3 col-md-3">
              <div><h5>CATEGORIES:</h5></div> 
              <table  class="table  table-responsive-md table-responsive-sm">
               <tr>
                 <td class="table-secondary" >
                 Acrylic Panting
                 </td>
               </tr>
               <tr>
                 <td>
                 Madhubani Panting
                 </td>
               </tr>
               <tr>
                 <td>
                 Sketches&Craft
                 </td>
               </tr>
               <tr>
                 <td>
                 WaterColor drawing
                 </td>
               </tr>
               </table>
              <div class="card">
                <div class="pt-3 pl-3"><h5>LOGIN  FORM:</h5> </div>
               <div class="form-group">
                 <div class="row pl-3">
                   <div class="col pr-4">
                     <input type="text" class="form-control" placeholder="your name" required>
                 </div>
                  </div>
               </div>
               <div class="form-group">
                 <div class="row pl-3">
                   <div class="col pr-4">
                     <input type="text" class="form-control" placeholder="your email" required>
                 </div>
                  </div>
               </div>
               <div class="form-group">
                <div class="row pl-3">
                  <div class="col pr-4">
                    <button type="submit" class="btn btn-primary" >submit</button>
                </div>
                 </div>
               </div>
              </div>
               </div>
          </div>
             
       
      </div>
    </div>
     </div>
 </header>
@endsection