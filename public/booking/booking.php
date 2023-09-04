@extends('layouts.template')

@section('content')


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Please choose which theme parks you wish to visit and we will make your wish come true.
								Bring your friends and have fun on your adventure!
								<br>We welcome you with open arms.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="{{ route('bookings.store',$booking->id) }}" method="POST">
								<div class="form-group">
									<span class="form-label">Theme Park</span>
									<select class="form-control" name="park_id">
										<option value="">Select Your Theme Park</option>
										@foreach ($groups as $id => $name)
											<option
												value="{{$id}}" {{ (isset($theme_park['park_id']) && $theme_park['park_id'] == $id) ? ' selected' : '' }}>{{$park_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Quantity</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
										<div class="form-group">
											<span class="form-label">Book Date</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
								</div>
								
								<div class="form-btn">
									<button class="submit-btn">Book</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection