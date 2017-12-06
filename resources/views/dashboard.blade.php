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
            <li><a href="{{ route('logout') }}">Logout</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="row">

<div class="col-md-4 col-md-offset-4">
  <h3>Create an App</h3>
  <form method="post" action="{{ route('createApp') }}">
  <div class="form-group">
    <input class="form-control" type="text" name="name" placeholder="App Name">
  </div>
  <input type="submit" name="submit" value="Create" class="btn btn-primary">
  <input type="hidden" name="_token" value="{{ Session::token() }}">
</form>    
</div>

</div>


</body>
</html>