<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/custom.css') }}">

        <!-- Styles -->
        
    </head>
    <body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CVApi</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::user())
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('getDocumentation', ['id' => 1]) }}">Documentation</a></li>
            <li><a href="{{ route('logout')}}">Logout</a></li>
        @else

        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <div class="row">

            <!-- Register Form -->
            <div class="col-md-3 col-md-offset-2">
                <h3>Register</h3>
                <form action="{{ route('register') }}" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="surname" placeholder="Your Surname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="repeat-password" placeholder="Repeat Password">
                    </div>
                    <input value="Register!" type="submit" name="submit" class="btn btn-success">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>

            <!-- Sign In Form -->
            <div class="col-md-3 col-md-offset-2">
                <h3>Sign In</h3>
                <form action="{{ route('signin') }}" method="post">
                    <div class="form-group">
                        <input class="form-control" type="email" name="s_email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="s_password" placeholder="Password">
                    </div>
                    <input value="Sign In!" type="submit" name="submit" class="btn btn-primary">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>


        </div>


        <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
    </body>
</html>
