<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Note there is no responsive meta tag here -->
    
        <link rel="icon" href="#">
        <title>{{$title}}</title>
        
        <link href='//fonts.googleapis.com/css?family=Roboto:100,400,300,700' rel='stylesheet' type='text/css'>
    
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
        <!-- Bootstrap core CSS -->
        <link href="{{asset('packages/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('packages/css/style.css')}}" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="{{asset('packages/css/non-responsive.css')}}" rel="stylesheet">
        
        <link href="{{asset('packages/utils/bxslider/jquery.bxslider.css')}}" rel="stylesheet">
        
        <link href="{{asset('packages/utils/jssor/css/style.css')}}" rel="stylesheet">
        
        <script type="text/javascript" src="{{asset('packages/js/jquery-1.9.1.min.js')}}"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
        
    </head>
    <body class="home blog group-blog">
        @section('navbar')
            @include('frontend.includes.navbar')
        @show
        
        
        <div class="container" id="mainContent">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        @section('wrapper')
            
            <div id="sliderFrame">
                <div class="row">
                    <div class="thumbnail col-xs-9">@include('frontend.includes.slider')</div>
                    <img src="http://placehold.it/270x300" class="thumbnail pull-right">
                </div>
            </div>
            <br>
            <div id="wrapper">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="border-head">
                            <h3>
                                <strong class="color-blue">Daily Update</strong>
                                - 27 March
                            </h3>
                        </div>
                        @yield('content')
                        
                    </div><!-- #End col-md-8 -->
                    
                    <div class="col-xs-4 rightSidebar">
                        @section('sidebar')
                            @include('frontend.includes.sidebar')
                        @show
                    </div>
                </div><!-- End row -->
            </div>
         @show 
            @section('footer')
                @include('frontend.includes.footer')
            @show
        
        </div>
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
        
        <script src="{{asset('packages/css/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{asset('packages/js/ie10-viewport-bug-workaround.js')}}"></script>
    </body>
</html>