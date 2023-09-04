<html>

</html>


<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Sky World ┊ Sign In </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('signIn/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('signIn/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('signIn/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('signIn/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <!-- body -->
   <body class="main-layout">
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <br><br><br>
         </div>
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg">
			   <a><img src="{{ asset('signIn/images/logos.png') }}" style="width:43%;" alt="Logo" /></a>
            <br><br><br>
                  <h1 style="font-size: 60px; line-height: 80px; color: #5C87A7;">Sign In To Your Account</h1>
				  <p style="color:black; font-size:15px;  padding: 35px 0px 70px 0px;">
				  <label>
						<input type="checkbox" checked="checked" name="remember">  By signing in, I agree to SkyWorld Theme Park <b> Privacy Policy</b><br>and <b>Terms of Service</b>.
					</label>
					</p>
               </div>
            </div>

            <div class="col-md-6">
               <form method="POST" action="{{ route('login') }}" id="request" style="padding: 30px 40px 60px 30px; background: #81AAC9;" class="main_form">
                 @csrf
                 <div class="row">
                     <div class="col-md-12">
                        <input id="email" class="contactus" style="margin-bottom: 31px; color: white;" placeholder=" Email" type="email" name="email" required  autocomplete="off"  >
                     </div>
                    <div class="col-md-12">
                        <input id="password" class="contactus" style="margin-bottom: 31px; color: white;" placeholder=" Password" type="password" name="password" required autocomplete="off" >                          
                     </div>
                     <div class="col-sm-12">
                        <button class="send_btn" style="background-color: black; color:white;" >  {{ __('Log in') }}  </button><br>
                     </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />


					 <div style="text-align:center;" class="container signin">
						<p>Don't have an account? <a href="{{ route('register') }}">Register</a>.</p>
					  </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- end banner -->
      
      <!-- Javascript files-->
      <script src="{{asset('')}}/signIn/js/jquery.min.js"></script>
      <script src="{{asset('')}}/signIn/js/popper.min.js"></script>
      <script src="{{asset('')}}/signIn/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('')}}/signIn/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="{{asset('')}}/signIn/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{asset('')}}/signIn/js/custom.js"></script>
      <script src="{{asset('')}}/signIn/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
