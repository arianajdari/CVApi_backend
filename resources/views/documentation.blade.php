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
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/documentation.css') }}">  

    <!-- JS Files -->
    <script src="{{URL::to('js/scrollreveal.min.js')}}"></script>
  </head>
  <body style="width: 100%; height: 100%;">

   <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mb-0 h1" href="index.html">
            <img  src="{{URL::to('images/CVApiLogo3.png')}}" width="33"  class="d-inline-block align-top mr-1 mb-0" alt="" >
            CVApi
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-inline ml-auto">
            <ul class="navbar-nav mx-a">
              <li class="nav-item">
                <a href="{{ route('dashboard')}}" class="nav-link  joinUs">Dashboard</a>
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
    
    <div class="sidebar_menu">
        <div class="container">
             <center>
            <a href="#"><h1 class="boxed-item"><span class="logo-bold">CVApi</span>  Functions</h1></a>
          </center>

          <ul class="navigation-selection">
           <li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 1]) }}">adaptiveThreshold</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 2]) }}">bgrToGray</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 3]) }}">bgrToHsv</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 4]) }}">bgrToRgb</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 5]) }}">bilateralBlur</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 6]) }}">blackHat</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 7]) }}">blur</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 8]) }}">brightess</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 9]) }}">closing</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 10]) }}">crop</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 11]) }}">darken</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 12]) }}">dilate</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 13]) }}">enlarge</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 14]) }}">erode</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 15]) }}">gaussianBlur</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 16]) }}">grayscale</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 17]) }}">grayToBgr</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 18]) }}">grayToRgb</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 19]) }}">histogram</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 20]) }}">hsvToBgr</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 21]) }}">hsvToRgb</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 22]) }}">imageChannels</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 23]) }}">medianBlur</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 24]) }}">morphGradient</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 25]) }}">normalBlur</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 26]) }}">opening</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 27]) }}">pyrDown</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 28]) }}">pyrUp</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 29]) }}">reduce</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 30]) }}">resize</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 31]) }}">rgbToBgr</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 32]) }}">rbgToGray</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 33]) }}">rgbToHsv</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 34]) }}">rotate</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 35]) }}">sharpen</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 36]) }}">threshold</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 37]) }}">topHat</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 38]) }}">translate</a></li>
<li class="navigation-item"><a   href="{{ route('getDocumentation', ['id' => 39]) }}">transpose</a></li> 

          </ul>

          <div class="dropdown-divider"></div>

          <div class="lefttogglemenu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="container " id="document" >
          <div class="row ">
            <div class="col-md-8 text-center mb-5" >
              <h1 class="title "><span class="text-muted font-weight-bold"><?php echo $data[0]->name;  ?></span>  <br> <h2><?php echo $data[0]->description; ?></h2></h1>
            </div>
          </div>
          <div class="row mt-3 subtitle">
            <div class="col-md-8">
              <h2 class="description">Description</h2>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-7 bg-white p-3 " style="border-radius: 10px;"  >
              <h6 class="text-gray-dark ml-5 font-italic text-muted"> <?php echo $data[0]->prototype; ?></h6>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-8">
              <h5 class=""> <?php echo $data[0]->explanation;  ?></h5>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-8 subtitle">
              <h2 class="description  ">Parameters</h2>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-8">
              <?php echo $data[0]->parameters; ?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-8 subtitle">
              <h2 class="description ">Example</h2>
            </div>
          </div>
          <div class="row mt-3 " style="">
            <div class="col-md-8 py-5 mb-5 text-white" style="border-radius: 10px; background:#868e96;">
              <h6 class="mx-5 example-code">
               <?php echo $data[0]->example; ?>
              </h6>
            </div>
          </div>
      </div>
      <div class="container " id="document" >
          <div class="row">
            <div class="col-md-8" >
        <?php echo $data[0]->links; ?>
    </div>
  </div>
</div>
       
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <script type="text/javascript" src="{{ URL::to('js/popper.min.js') }}" ></script>  
    <script  type="text/javascript" src="{{ URL::to('js/jquery-3.2.1.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/fontawesome-all.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('js/smooth-scroll.min.js') }}"></script> 
    <script  type="text/javascript" src="{{ URL::to('js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/documentation.js')}}"></script>
    <script type="text/javascript">


    var token = '{{ Session::token() }}';
    var url = '{{ route('fetchText') }}';


    $('.callFunction').click(function(e) {
      e.preventDefault();

      var text = $(this).text();

      $.ajax({
        'method' : 'POST',
        'url' : url,
        'data' : {
          'text' : text,
          '_token' : token
        }
      }).done(function(msg) {
        var id = msg['data'];

        console.log(id);
        location.href = '/getDocumentation/'+id;
      });

    });
  </script>
   
    
  </body>