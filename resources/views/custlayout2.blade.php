<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Sky World ┊ Customer Side </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}/customer/img/skyworld-logo.PNG">
    <!-- Google Fonts
		============================================ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('')}}/customer/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('')}}/customer/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('')}}/customer/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('')}}/customer/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('')}}/customer/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
    .header-top-area2 {
        position: fixed;
        box-shadow: 0 5px 5px rgba(37, 37, 37, 0.384);
        background: #696cff;
        z-index: 99;
        left: 0;
        right: 0;
        top: 0;
        margin: 0 auto;
        transition: all 0.3s;
    }

    .ferris-bg
    {
        background-image: url("{{asset('')}}/customer/img/bg.JPG");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    </style>
    
</head>

    <div >
<body class="ferris-bg" >

    <!-- Start Welcome area -->
    <div>
        <div>
            <div class="header-top-area2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{route('reserve.index')}}" class="nav-link">Themeparks</a>
                                                </li>
                                                <li class="nav-item"><a href="{{route('reserve.create')}}" class="nav-link">Book a Ticket</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                          <span> {{ Auth::user()->name }} </span>
                                                          <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{route('custProfile.edit', Auth::user()->id)}}"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                            <span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-behind-header"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br> <br> <br> <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid"> 
            @yield('content')
        </div>
      
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{asset('')}}/customer/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('')}}/customer/js/counterup/waypoints.min.js"></script>
    <script src="{{asset('')}}/customer/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('')}}/customer/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{asset('')}}/customer/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/morrisjs/raphael-min.js"></script>
    <script src="{{asset('')}}/customer/js/morrisjs/morris.js"></script>
    <script src="{{asset('')}}/customer/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('')}}/customer/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="{{asset('')}}/customer/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/calendar/moment.min.js"></script>
    <script src="{{asset('')}}/customer/js/calendar/fullcalendar.min.js"></script>
    <script src="{{asset('')}}/customer/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('')}}/customer/js/plugins.js"></script>
    <!-- main JS
		============================================ -->

</body>

</html>