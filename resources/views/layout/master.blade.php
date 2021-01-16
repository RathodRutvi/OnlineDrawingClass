<html>
    <head>
      <title>Online ArtClasses</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/font-aswome.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="jquery-3.5.1.min.js"></script>
      <script src="js/bootstrap.bundle.min.js.map"></script>
      <script src="js/bootstrap.bundle.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="styles.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/js/umd/util.js')}}"></script>
      
    </head>
      <body>
      <div class=contener-fluid>
        <header>
              <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="#">
                 <img src="img/logo.png" width="200" height="100" /></a>
                 
         <button type="button" class="navbar-toggler  collapsed  navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
            <span class="sr-only">Tooggle navigation</span>
            <span class="navbar-toggler-icon"></span>
         </button>
        <div class="navbar-collapse collapse in"   id="navbarCollapse" aria-expanded="true">
                     <ul class="navbar-nav text-howel pl-4" >
                      <li>
                       <a class="nav-link  text-danger" href="{{('home')}}" aria-haspopup="true" aria-expanded="true">
                          <b>HOME</b>
                       </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <b>COURSES</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('registration')}}">Warily Panting<span class="badge badge-pill  badge-info">join now</span></a>
                          <a class="dropdown-item" href="#">Acrylic Panting</a>
                          <a class="dropdown-item" href="#">Madhubani Panting</a>
                          <a class="dropdown-item" href="#">Sketches</a>
                          <a class="dropdown-item" href="#">Craft</a>
                          <a class="dropdown-item" href="#">WaterColor drawing</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Elementary/ Intermediate Exam</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger " href="{{('gallery')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <b>GALLERY </b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item " href="{{('gallery')}}">Painting</a>
                          <a class="dropdown-item" href="{{('gallery_sketches')}}">Sketches</a>
                        </div>
                      </li>
                      <li class="nav-time"><a class="nav-link text-danger" href="{{('activity')}}"><b>ACTIVITY</b></a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link text-danger " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <b>CONTACTUS</b>
                        </a>
                        </li>
                      <li class="nav-time"><a class="nav-link text-danger" href="#"><b>CERTIFICATES</b></a></li>
                     <li class="nav-time">
                     <form action="{{route('login')}}" method="GAT">
                    <button class="btn btn-danger p-2" type="submit"  href="{{route('login')}}">Singin</button>
                      </form></li>
                      <li class="nav-time pl-2">
                      <form action="{{route('registration')}}" method="GAT">
                      <button class="btn btn-danger p-2" type="submit" href="{{route('registration')}}">Singup</button>
                     </form>
                    </li>
                    </ul>
                </nav>
            </div>
          </div>
          
           </div>
           
        </div>
      <div>
       </header>
    <!--contain-->
@yield('content')
      </body>
    </html>
   
    
        
       