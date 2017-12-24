<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CVApi</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|PT+Sans+Narrow" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/fontawesome.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/dashboard.css')}}">

    <!-- JS Files -->
   <script src="{{ URL::to('js/scrollreveal.min.js') }}"></script> 
  </head>
  <body>

    <!-- NAVBAR SECTION -->
   <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top">
      <div class="container">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
        <a class="navbar-brand mb-0 h1" href="index.html">
            <img  src="images/CVApiLogo3.png" width="33"  class="d-inline-block align-top mr-1 mb-0" alt="" >
            CVApi
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-inline ml-auto">
              <ul class="navbar-nav mx-a">
                <li class="nav-item">
                  <a href="Documentation.html" class="nav-link  joinUs">Documentation</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="sign-up">
                    <button class="btn btn-outline-danger "> <span class="mb-0 h5">Log Out</span></button>
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </div>
    </nav>
    
    <!--APP DESIGN SECTION -->
    <div class="container py-5">
      <div class="row">

        <div class="col-lg-6 my-auto mx-auto ">
          <table class="table table-hover">
            <thead class="">
              <tr>
                <th></th>
                <th>App Name</th>
                <th>Created Date</th>
                <th class="text-center">Options</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user_apps as $user_app)
                <tr>
                <th scope="row">1</th>
                <td>{{ $user_app->name }}</td>
                <td>{{ $user_app->created_ad }}</td>
                <td class="text-center">
                  <a href="#">
                    <button class="btn btn-info">
                    <i class="fas fa-eye"></i>
                  </button>
                  </a>
                  <a href="#">
                    <button class=" btn btn-danger ">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                  </a>
                </td>
              </tr>
              @endforeach
          </table>
        </div><!-- List  Apps -->
        <div class="col-lg-6">
          
          <form action="{{ route('createApp') }}" method="post" >
              <i class="fas fa-plus-circle fa-3x" style="margin: 2px 45%; color:#D23938; "></i>
            <div class="form-group addnew">
              <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fas fa-cogs"></i>
                  </span>
                <input class="form-control" type="text" name="name" placeholder="App Name">
                <span class="input-group-btn">
                   <input type="submit" name="submit" id="app-submit"  class="form-control btn-info " value="CREATE" style="background-color:#59adeb !important; border-color:#59adeb; border-radius: none; ">  
                   <input type="hidden" name="_token" value="{{ Session::token() }}">
                </span>     
              </div>
            </div>
          </form>
        </div> <!-- Create new App -->
      </div>
  
      <div class="row created">
        <div class="col-md-6 mx-auto text-center">
          <form action="" class="mt-3">
            <div class="form-group">
              <label for="name">App Name</label>
              <div class="input-group">
                <input class="form-control" type="text" name="appname" value="{{ Auth::user()->app->name }}"  readonly="readonly">
              </div>
            </div>
            <div class="form-group">
               <label for="pubkey">Public Key</label>
              <div class="input-group ">
                <input class="form-control" type="text" name="pubkey" value="{{ Auth::user()->app->public_key }}" readonly="readonly">
              </div>
            </div>
             <div class="form-group">
               <label for="seckey">Secret Key</label>
              <div class="input-group ">
               <input class="form-control" type="text" name="seckey" value="{{ Auth::user()->app->secret_key }}"  readonly="readonly">
              </div>
            </div>
             <div class="form-group">
               <label for="pass">Password</label>
              <div class="input-group ">
                <input class="form-control" type="text" name="pass" value="{{ Auth::user()->app->password }}"  readonly="readonly">
              </div>
            </div>
          </form>
        </div>
    </div><!-- Created Key -->

</div>

     <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script type="text/javascript" src="{{ URL::to('js/popper.min.js') }}" ></script>  
    <script  type="text/javascript" src="{{ URL::to('js/jquery-3.2.1.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/fontawesome-all.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/smooth-scroll.min.js') }}"></script> 
    <script  type="text/javascript" src="{{ URL::to('js/dashboard.js') }}"></script> 
  </body>