<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,900" rel="stylesheet" type="text/css">
    <style>
        * {
            font-family: Lato;
            font-weight: 300;
        }

        body {
          background-image: url("https://hd.unsplash.com/photo-1466442929976-97f336a657be");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: 50% 30%;
        }

        .dropdown-menu {
            -webkit-transition: all 500ms ease-out;
            transition: all 500ms ease-out;
            opacity: 0;
            display: block;
        }

        .open .dropdown-menu {
            opacity: 1;

        }
    </style>


    <title>Orthodox Admin</title>
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
            <a class="navbar-brand" href="{{ action('Pages@welcome') }}">OrthodoxAdmin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('Pages@people')}}">People</a></li>
                <li><a href="{{action('SaintsController@saints')}}">Saints</a></li>
                <li><a href="{{action('Pages@about')}}">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class=""></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Login</a></li>
                        <li><a href="{{ action('Pages@settings') }}">Settings</a></li>
                        <li><a href="#">Contact</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        @yield('content')
    </div>


    @yield('footer')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</body>
</html>
