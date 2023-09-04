<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('navBar/css/style.css') }}">
	</head>
    <body>
        <!--Nav Bar-->
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-primary ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{ asset('navBar/images/logos.png') }}" alt="Sky World" height="59"></a>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="{{ url('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ url('home') }}" class="nav-link">Theme Parks</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{ url('profile') }}">{{ Auth::user()->name }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item" style="background:#ff1577"><a href="{{ url('frontBooking') }}"class="nav-link">Book Now!</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
        <script src="{{ asset('navBar/js/jquery.min.js') }}"></script>
        <script src="{{ asset('navBar/js/popper.js') }}"></script>
        <script src="{{ asset('navBar/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('navBar/js/main.js') }}"></script>
            
        <!-- Main Content -->
        <main>   
            @yield('content')        
        </main>
    </body>
</html>
