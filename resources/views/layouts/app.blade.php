<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Learning</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   
    <script type="text/javascript" src="{!! asset('admin_asset/ck/ckeditor/ckeditor.js') !!}"></script>
 
</head>
<body id="app-layout">
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    E-learning
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                @if(Auth::check())
                    <li><a href="{{ url('/home') }}">Home</a></li>
                     <li><a href="{{ url('/contact') }}">Contact</a></li>
                    
                @endif
               
                <!-- @if (auth()->check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Categories <span class="caret"></span>
                       

                        <ul class="dropdown-menu" role="menu">
                            
                            <li>
                                <a class="default" href="{{ url('/cate/show') }}" role="button">Lesson</a>
                            </li>
                        
                            <li>
                                <a class="default" href="{{ url('/quiz') }}" role="button">Quiz</a>
                            </li>
                        </ul>
                    </li>
                @endif -->
               
                </ul>
                 @if (auth()->check())
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                @endif 
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (auth()->check())
                    @if(Auth::user()->role >= 1)
                    
                    <li style="margin-right: 20px; position: relative; padding-left: 50px;"><a href="{{ url('/admin') }}">Management</a></li>
                    @endif
                    @endif
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    
                        <li>
                            <a href="{{ url('/profile') }}"  style="position: relative; padding-left: 50px;">
                            <img src="{{ asset('/uploads/avatars/' .  Auth::user()->avatar }}" style="width:32px; height: 32px; position: absolute; top:10px; left:10px; border-radius: 50%;">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout
                        </a></li>
                               
                            </ul>
                        </li>
                    @endif
                </ul>
               
            </div>
        </div>
    </nav>
 <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img style="height: 400px; width: 1100px" class="slide-image" src="/header/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img style="height: 400px; width: 1100px" class="slide-image" src="/header/3.gif" alt="">
                        </div>
                        <div class="item">
                            <img style="height: 400px; width: 1100px" class="slide-image" src="/header/1.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="menu" >
                @yield('menu')
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
         

   
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>


</body>
</html>
