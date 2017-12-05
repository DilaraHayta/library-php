<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" >

    <style>
        body{
            padding: 70px;
        }
    </style>
</head>
<body>
<div class="page">
    <br><br>
    <div class="col-md-4 col-md-offset-4 container" align="center">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <br><br><br>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            @yield('books')
                            <br>
                            <li><a href="/logout">Log Out</a></li>
                        @else
                            <li>{{ link_to_route('login','Log In') }}</li>
                            <li>{{ link_to_route('register','Sign Up') }}</li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

@show


</body>
</html>