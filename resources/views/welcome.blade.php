<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Logo</a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" active nav-link" href="#"><i class="fa fa-home fa-lg"> Home</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-phone fa-lg"> Contact</i></a>
                    </li>
                    @if (Route::has('login'))
                        <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class=""> Home</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in fa-lg nav-link"> Login</i></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fa fa-user-plus fa-lg nav-link" > Register</i></a>
                        @endif
                    @endauth
                </div>
            @endif

                    <!-- Dropdown -->
                    
                </ul>
        </nav>
        <div class="flex-center position-ref full-height">
           

                <div class="content">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
  
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/slider/a.jpg" alt="Los Angeles" >
                                </div>
                                <div class="carousel-item">
                                    <img src="/slider/b.jpg" alt="Chicago" >
                                </div>
                                <div class="carousel-item">
                                    <img src="/slider/a.jpg" alt="New York">
                                </div>
                            </div>
  
                                <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            
                <div class="title m-b-md">
                    Smart Poultry Manager
                </div>
                
                
            </div>
        </div>
    </body>
</html>
