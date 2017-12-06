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


        <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
        <script type="text/javascript">
            var url = '{{ route('uploadPic') }}';
        </script>

        <script type="text/javascript">



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
                        var text = this.responseText;
                        text = jQuery.parseJSON(text);
                        $('.image').html("<img style='height:300px;' src='/getImage/"+ text.message +"'>");
                        $('#upload').css('display','none');
                        $('.image').css('display','block');
                    }
                    xhr.open('post', url);
                    xhr.send(formdata);
                }

        </script>

    </body>
</html>
