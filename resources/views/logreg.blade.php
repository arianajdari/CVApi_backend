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
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css')}}">

    <!-- JS Files -->
    <script src="{{ URL::to('js/scrollreveal.min.js') }}""></script>
  </head>
  <body>

	<!-- NAVBAR SECTION -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top">
	  <div class="container">
	      <a class="navbar-brand mb-0 h1" href="index.html">
	          <img  src="images/CVApiLogo3.png" width="33"  class="d-inline-block align-top mr-1 mb-0" alt="" >
	          CVApi
	      </a>
	  </div></nav>

	<!-- LOGIN REGISTER SECTION -->
<section id ="login-register">
	<div class="container ">
	    <div class="row">
			<div class="col-md-8 mx-auto">
				<div class="panel panel-login ">
					<div class="panel-heading my-3">
						<div class="row   mx-auto ">
							<div class="col-sm-6 my-2">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<hr>
							<div class="col-sm-6 my-2 register-form-link">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr >
					</div><!--Header-->
					<div class="panel-body mt-4" id ="contact">
						<div class="row">
							<div class="col-sm-11 mx-auto">
								<div class="row">
									<div class="col-md-12 text-center">
										<img src="images/CVApiLogo2.png" width="70" class="mb-3">
									</div>
								</div>

								<form id="login-form" action="{{ route('signin') }}" method="post" role="form" style="display: block;">
									<h3 class="text-muted text-center ">Welcome Back</h3>
									<div class="form-group">
										<div class="input-group input-group-lg">
							                <span class="input-group-addon">
							                  <i class="fa fa-envelope"></i>
							                </span>
											 <input class="form-control" type="email" name="s_email" placeholder="E-mail">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-lg">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input class="form-control" type="password" name="s_password" placeholder="Password">
										</div>
									</div>
									<div class="form-group ml-1">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-6 ml-auto mr-1">
												<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Sign in">
												<input type="hidden" name="_token" value="{{ Session::token() }}">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-6">
												
											</div>
											<div class="col-lg-6 ">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

								<form id="register-form" action="{{ route('register') }}" method="post" role="form" style="display: none;">
									<h3 class="text-muted text-center">Join Us</h3>

									<div class="form-group">
										<div class="input-group input-group-lg">
							                <span class="input-group-addon">
							                  <i class="far fa-user"></i>
							                </span>
											 <input class="form-control" type="text" name="name" placeholder="Your Name">						
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-lg">
							                <span class="input-group-addon">
							                  <i class="fa fa-user"></i>
							                </span>
											<input class="form-control" type="text" name="surname" placeholder="Your Surname">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-lg">
							                <span class="input-group-addon">
							                  <i class="fa fa-envelope"></i>
							                </span>
											<input class="form-control" type="email" name="email" placeholder="E-mail">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-lg">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input class="form-control" type="password" name="password" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-lg">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											 <input class="form-control" type="password" name="repeat-password" placeholder="Confirm Password">
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 ml-auto ">
												<input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												<input type="hidden" name="_token" value="{{ Session::token() }}">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div><!--Login-Register Body -->
				</div><!--Login-Register Panel -->
			</div>
		</div>	
 	 </div>
</section>
	


  	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script type="text/javascript" src="{{ URL::to('js/popper.min.js') }}" ></script>  
    <script  type="text/javascript" src="{{ URL::to('js/jquery-3.2.1.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/fontawesome-all.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/smooth-scroll.min.js') }}"></script> 
    <script  type="text/javascript" src="{{ URL::to('js/login.js') }}"></script> 

  </body>
</html>