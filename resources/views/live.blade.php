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
            <li><a href="{{ route('liveDemo') }}">Try it</a></li>
        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <div id="upload" class="row">
            <div style="width: 600px;height: 300px;border: 2px dashed #ccc;color:  #ccc;line-height: 300px;text-align:center;" id="dropzone" class="col-md-8 col-md-offset-2 dropzone">
                Drop a file to upload
            </div>
        </div>


<div class="row">
    <div style="width:600px;height:300px;border:2px dashed #ccc;color:#ccc;line-height:300px;text-align:center;display:none;" class="col-md-8 col-md-offset-2 image">
      
    </div>
</div>

<div id="options"  class="row">
    <form method="post" action="#">
    <div class="col-md-3 col-md-offset 3">
        <input type="submit" value="grayscale" class="btn btn-primary" name="grayscale">
        
        <input type="submit" value="transpose" class="btn btn-primary" name="transpose">

        <input type="submit" value="pyrDown" class="btn btn-primary" name="pyrDown">
        <input type="text" value="" placeholder="enter value" class="pyrDown" name="pyrDown_1">

        <input type="submit" value="reduce" class="btn btn-primary" name="reduce">
        <input type="text" value="" placeholder="enter reduce" class="reduce" name="reduce_1">
        <input type="text" value="" placeholder="enter reduce" class="reduce" name="reduce_2">
    </div>
    </form>
</div>



        <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
        <script type="text/javascript">
            var url = '{{ route('uploadPic') }}';
            var urlProcess = '{{ route('changePic') }}';
            var token = '{{ Session::token() }}';
            var urlClose = '{{ route('deleteImage') }}';
        </script>

        <script type="text/javascript">

                var name;


                $(".dropzone").on("dragover", function(event) {
                    event.preventDefault();  
                    event.stopPropagation();
                    $(this).addClass('dragging');
                });

                $(".dropzone").on("dragleave", function(event) {
                    event.preventDefault();  
                    event.stopPropagation();
                    $(this).removeClass('dragging');
                });


                $('.dropzone').on("drop", function(event) {
                    event.preventDefault();  
                    event.stopPropagation();
                    

                    upload(event.originalEvent.dataTransfer.files);

                });

                var upload = function(files) {
                    var xhr = new XMLHttpRequest(),
                        formdata = new FormData();

                    formdata.append('file', files[0]);

                    xhr.onload = function() {
                        text = this.responseText;
                        text = jQuery.parseJSON(text);
                        $('.image').html("<img style='height:300px;' src='/getImage/"+ text.message +"'>");
                        $('#upload').css('display','none');
                        $('.image').css('display','block');
                        $('#options').css('display', 'block');
                        name = text.message;

                    }
                    xhr.open('post', url);
                    xhr.send(formdata);
                }


                $("input[type=submit]").click(function(e) {
                    e.preventDefault();
                    var islem = $(this).attr('value');
                    var parametreler = $("."+islem);
                    var islemler = [];
                    for(var i = 0; i < $(parametreler).length; i++)
                        islemler.push($($(parametreler)[i]).val());

                    
                    $.ajax({
                        url : urlProcess,
                        async: false,
                        method : 'POST',
                        data: {
                            islem : islem,
                            id : name,
                            islemler : islemler,
                            _token : token
                        },
                        success: function(msg) {
                            name = msg['id'];
                            $('.image').html("<img style='height:300px;' src='/getImage/"+ msg['id'] +"'>");
                        }
                    });
                });


                $(window).on("unload", function() {
                     $.ajax({
                        url : urlClose,
                        async: false,
                        method: 'POST',
                        data: {
                            id : name,
                            _token: token
                        }
                    });
                });

        </script>

    </body>
</html>
