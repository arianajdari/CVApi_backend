<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CVApi</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|PT+Sans+Narrow" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/fontawesome.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}"> 

    <!-- JavaScript -->
    <script src="{{ URL::to('js/scrollreveal.min.js') }}"></script> 
</head>
<body>
    <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand mb-0 h1" href="{{ route('login')}}">
                <img  src="images/CVApiLogo3.png" width="33" height="33" class="d-inline-block align-top mr-1 mb-0" alt="" >CVApi
            </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-5 linkler">
                  <li class="nav-item">
                    <a href="#headerSection" class="nav-link">Home</a> 
                  </li>
                  <li class="nav-item">
                    <a href="#aboutus-scroll" class="nav-link ">About Us</a> 
                  </li>
                  <li class="nav-item">
                    <a href="#ourworks-scroll" class="nav-link ">Our Work</a> 
                  </li>
                  <li class="nav-item">
                    <a href="#contact-scroll" class="nav-link ">Contact</a> 
                  </li>
                </ul>

                <div class="d-inline ml-auto">
                  <ul class="navbar-nav mx-a">
                    <li class="nav-item">
                      <a href="{{ route('logreg') }}" class="nav-link  joinUs">Join Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('logreg') }}" class="sign-up">
                        <button class="btn btn-outline-danger "> <span class="mb-0 h5">Sign In</span></button>
                      </a>
                    </li>
                  </ul>
                </div>
                
            </div>
        </div>
    </nav>

        <!--HEADER SECTION -->
    <header id="headerSection" class="mt-auto">
      <div class="overlay">
        <div class="container ">
          <div class="row text-center mainContent">
            <div class="col my-auto">
              <h1><span class="text-white" >CVApi</span> </h1>
              <h1 style="color: #D23938;">Image Processing With PHP</h1>
              <p class="text-muted mx-auto px-2" > <em>CVApi is an abstraction layer which builds upon web technologies offering modern and stunning computer vision functionality by leveraging parallelism, innovation and user-friendly interface. By starting relatively simple with offering of basic functionality such as in-demand image manipulations, CVApi scales both horizontally and vertically by supporting a wide range of architectures and including cutting-edge achievements done in computer vision into it's modules.</em></p>
              <a href="{{ route('liveDemo')}}">
                <button class="btn btn-lg btn-primary "><b>Try Me</b></button>
              </a>
            </div>
            
          </div>
        </div>
      </div></header>

    <!-- FEATURES SECTION -->
    <section id="features" class="pt-3 ">
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-center">
            <div class="feature-top">
              <i class="fab fa-3x fa-ravelry"></i>
              <h3>SLEEK SYNTAX</h3>
            </div>
              <p style="text-align:justify;">Leveraging newest PHP features, CVApi offers sleek syntax which is easily 
              integrateable into existing PHP code or any other PHP framework.</p>
          </div>

           <div class="col-md-3 text-center">
            <div class="feature">
              <div class="feature-top">
                <i class="fa fa-3x fa-cog"></i>
                <h3>CLEAN CODE</h3>
              </div>
              <p style="text-align:justify;">Ever had headache while trying to find your way inside cramped up PHP code. By using KISS system, 
              we made sure that whatever the needs, the resulting code is going to be clean and understandable</p>
            </div>
          </div>

           <div class="col-md-3 text-center">
            <div class="feature">
              <div class="feature-top">
                <i class="fa fa-3x fa-clock"></i>
                <h3>SAVE TİME</h3>
              </div>
              
              <p style="text-align:justify;">Have a blog website, a forum or image service site? You are bound to spend a lot of time integrating
              neccessary image handling modules. Why not just let CVApi handle image proccessing, while letting you focus on developing the app</p>
            </div>
          </div>

           <div class="col-md-3 text-center">
            <div class="feature">
              <div class="feature-top">
                <i class="fa fa-3x fa-podcast"></i>
                <h3>FREE SUPPORT</h3>
              </div>
              <p style="text-align:justify;">Stuck inside endless loop or just can't get CVApi work the way you imagined!? Feel free to contact our support staff for help!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr id="aboutus-scroll">
    <!-- HISTORY SECTION -->
    <section id="ourHistory" class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 historyLeft">
            <img src="images/feature-image.jpg" class="img-fluid mb-5" alt="Our History">
          </div>
          <div class="col-md-6 historyRight">
            <h2 class=" pl-4">Our History</h2>
            <p style="text-align:justify;">Computer Vision has become a powerhouse since last 10 years. Many modern devices make an extensive use of computer vision solutions such as opening your phone with face, face and eye recognition, applying filters to images, face mashing and so on...<br>We at CVApi thought of building necessary tools to make computer vision more accessiable to everyone. By offloading heavy-resource tasks to our servers and providing engaging tools to developers, we strive to make computer vision easy and understandable to everyone. This is a journey in which all we take a place.</p>
            <button class="btn mt-4">Check Our Work</button>
          </div>
        </div></section>
    
    <!-- CREATORS SECTION -->
    <section id="creators" class="">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 mx-auto">
            <div class="row">
              <div class="col-md-6 text-center creator1">
                <div class="card text-center mx-auto">
                  <div class="card-block">
                    <img src="images/arian.png" class="img-fluid rounded-circle my-4 img-responsive" width="30%">
                    <h3>Arian Ajdari</h3>
                    <h5 class="text-muted">Co-Founder/Developer</h5>
                    <p>Loves everything going on 4 wheels. In free time, dreams about becoming a pilot.</p>

                    <div class="d-flex flex-row justify-content-center" >
                    <div class="p-4">
                      <div id="ourworks-scroll" ></div>
                      <a target="_blank" href="https://www.facebook.com/arian.ajdari.5"><i class="fab fa-2x fa-facebook"></i></a>
                    </div>
                    <div class="p-4">
                      <a target="_blank" href="https://github.com/arianajdari"><i class="fab fa-2x fa-github"></i></a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 text-center creator2">
               <div class="card text-center mx-auto">
                <div class="card-block">
                  <img src="images/taha.jpg" class="img-fluid rounded-circle my-4 img-responsive" width="30%">
                   <h3>Taha Türk</h3>
                  <h5 class="text-muted">Co-Founder/Developer</h5>
                  <p>Computer Geek since birth. Can't decide between Windows or Linux, though!</p>

                  <div class="d-flex flex-row justify-content-center" >
                    <div class="p-4">
                      <div id="ourworks-scroll" ></div>
                      <a target="_blank" href="https://www.facebook.com/paspasci.deep"><i class="fab fa-2x fa-facebook"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fab fa-2x fa-twitter"></i></a>
                    </div>
                    <div class="p-4">
                      <a target="_blank" href="https://tr.linkedin.com/in/taha-türk-820b6988"><i class="fab fa-2x fa-linkedin"></i></a>
                    </div>
                    <div class="p-4">
                      <a target="_blank" href="https://github.com/th-turk"><i class="fab fa-2x fa-github"></i></a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>  
          </div>
        </div>
      </div></section>

    <!-- WHAT DOES CVApi DO SECTION -->
    <section id="whatCVApiDo" class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>What Are We Doing?</h2>
            <p class="text-muted"><em>Check our short intro into CVApi</em></p>
          </div>

          <div class="col-md-6 text-center mx-auto">
            <a href="#" class="video" data-video ="https://www.youtube.com/embed/nCVZHROb_dE" data-toggle="modal" data-target="#videoModal">
              <i class="far fa-5x fa-play-circle "></i>
            </a>
          </div>
        </div>
      </div></section>
    
    <!-- WHAT DOES CVApi DO MODAL -->
    <div id="videoModal" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          
            <button class="close ml-auto mr-3" data-dismiss="modal" aria-laber="Close"><span aria-hidden="true">&times;</span></button>
            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/nCVZHROb_dE" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
         
        </div>
      </div></div>
    
    <!-- COLLABRATOR  SECTION -->
    <section id="collabrators" class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 text-center">
               <img src="images/laravel.png" width="200px" class="img-responsive"> 
          </div>

           <div class="col-sm-4 text-center">
              <img src="images/opencv.png" width="190px" class="img-responsive">              
          </div>

           <div class="col-sm-4 text-center">
              <img src="images/symfony.png" width="200px" class="img-responsive"> 
          </div>
        </div>

        <div class="row ">
          <div class="col-md-8 mx-auto">
            <h2 class="mt-5 text-center">Developers <i class="fa fa-heart"></i> CVApi</h2>
          </div>
        </div>
      </div></section>

    <!-- TESTIMONTIAL SECTION -->
    <section id="testimontial" class="text-center py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="quote"><i class="fa fa-quote-left fa-3x"></i></div>

            <div id="mySlider" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#mySlider" data-slide-to="0"></li>
                <li data-target="#mySlider" data-slide-to="1"></li>
                <li data-target="#mySlider" data-slide-to="2"></li>
              </ol>
              
              <div class="carousel-inner ">
                <div class="carousel-item active ">
                  <img src="images/man.jpg" class="img-fluid  rounded-circle" width="15%" >
                  <div class="carousel-caption">
                    <blockquote class="blockquote p-0 m-0">
                      <p class="m-0 p-0">Lorem ipsum dolor sit amet, consectetur adipisic </p>
                      <footer class="blockquote-footer m-0 p-0">Oktay Yıldız <cite title="Dr.">Teacher</cite></footer>
                    </blockquote>
                  </div>
                </div>

                <div class="carousel-item ">
                  <img src="images/man.jpg" class="img-fluid rounded-circle" width="15%">
                  <div class="carousel-caption ">
                    <blockquote class="blockquote p-0 m-0">
                      <p class="m-0 p-0">Lorem ipsum dolor sit amet, consectetur adipisic </p>
                      <footer class="blockquote-footer m-0 p-0">Oktay Yıldız <cite title="Dr.">Teacher</cite></footer>
                    </blockquote>
                  </div>

                </div>

                <div class="carousel-item ">
                  <img src="images/man.jpg" class="img-fluid rounded-circle" width="15%">
                  <div class="carousel-caption ">
                    <blockquote class="blockquote p-0 m-0">
                      <p class="m-0 p-0">Lorem ipsum dolor sit amet, consectetur adipisic </p>
                      <footer class="blockquote-footer m-0 p-0">Oktay Yıldız <cite title="Dr.">Teacher</cite></footer>
                    </blockquote>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div></section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="mt-5">
      <div id="contact-scroll"></div>
      <div class="container" >
        <div class="row">
          <div class="col-lg-6">
            <h2>CONTACT US</h2>
            <p>You can use our contact form to reach us by e-mail.</p>
            <h4>Address</h4>
            <p>
              Gazi University, Faculty of Engineering<br>Eti Mahallesi, Ali Suavi Sokak, Çankaya/Ankara</p>
            <h4>Email</h4>
            <p>cvapi_support@cvapi.com</p>
            <h4>Phone</h4>
            <p>999 999 9999</p>
            <div class="d-flex flex-row">
              <div class="p-2 pr-0">
                <a href="#"><i class="fab fa-2x fa-facebook"></i></a>
              </div>
               <div class="p-2">
                <a href="#"><i class="fab fa-2x fa-twitter"></i></a>
              </div>
               <div class="p-2">
                <a target="_blank" href="https://github.com/arianajdari/CVApi"><i class="fab fa-2x fa-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <form>
              <div class="form-group">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <i class="far fa-user"></i>
                  </span>
                  <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                  </span>
                  <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                </div>
              </div>

              <input type="submit" value="SUBMIT" name="submit" class="btn btn-danger btn-block">
            </form>

          </div>
        </div>
      </div></section>
    
    
     <!-- FOOTER SECTION -->
     <footer id="main-footer" class="p-2 ">
       <div class="container-fluid">
         <div class="row text-center" >
           <div class="col-md-6 mx-auto ">
             <p class="lead my-auto">NO Copyright &copy; 2017 CVApi</p>
           </div>
         </div>
       </div></footer>




    <script type="text/javascript" src="{{ URL::to('js/popper.min.js') }}" ></script>  
    <script  type="text/javascript" src="{{ URL::to('js/jquery-3.2.1.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/fontawesome-all.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/smooth-scroll.min.js') }}"></script> 
    <script  type="text/javascript" src="{{ URL::to('js/main.js') }}"></script> 



</body>
</html>
