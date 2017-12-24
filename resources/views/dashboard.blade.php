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
                  <a href="{{ route('getDocumentation', ['id' => 1]) }}" class="nav-link  joinUs">Documentation</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('logout') }}" class="sign-up">
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
                <th scope="row">{{ $counter }}</th>
                <td>{{ $user_app->name }}</td>
                <td>{{ $user_app->created_at }}</td>
                <td class="text-center">
                  <a class="viewApp" data-id="{{ $user_app->id }}" href="#">
                    <button class="btn btn-info">
                    <i class="fas fa-eye"></i>
                  </button>
                  </a>
                  <a href="{{ route('deleteApp', ['id' => $user_app->id]) }}">
                    <button  class="btn btn-danger delete_app">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                  </a>
                </td>
              </tr>
              @php $counter++ @endphp
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
  
      <div id="app_info" class="row created">
        <div class="col-md-6 mx-auto text-center">
          <form id="app_form"  action="" class="mt-3">
            <div class="form-group">
              <label for="name">App Name</label>
              <div class="input-group">
                <input id="app_name" class="form-control" type="text" name="appname" value=""  readonly="readonly">
              </div>
            </div>
            <div class="form-group">
               <label for="pubkey">Public Key</label>
              <div class="input-group ">
                <input id="app_public_key" class="form-control" type="text" name="pubkey" value="" readonly="readonly">
              </div>
            </div>
             <div class="form-group">
               <label for="seckey">Secret Key</label>
              <div class="input-group ">
               <input id="app_secret_key" class="form-control" type="text" name="seckey" value=""  readonly="readonly">
              </div>
            </div>
             <div class="form-group">
               <label for="pass">Password</label>
              <div class="input-group ">
                <input id="app_password" class="form-control" type="text" name="pass" value=""  readonly="readonly">
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
    <script type="text/javascript">
      var url = "{{ route('viewApp') }}";
      var _token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript">
        $("#app_info").toggle();

        $('.viewApp').click(function(e) {
          e.preventDefault();
          var id = this.dataset.id;

          $.ajax({
            method: 'POST',
            async: true,
            url: url,
            data: {
              id: id,
              _token: _token
            }
          }).done(function(msg) {
            updateView(msg[1]);
          });
        });

        var updateView = function(data) {
          $('#app_name').val(data.name);
          $('#app_public_key').val(data.public_key);
          $('#app_secret_key').val(data.secret_key);
          $('#app_password').val(data.password);
          $("#app_info").css('display', 'block');
        };

    </script> 
  </body>