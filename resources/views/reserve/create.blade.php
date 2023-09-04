    
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{asset('')}}/booking/css/bootstrap.min.css" />

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('')}}/booking/css/style.css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


@extends('custlayout2')


@section('content')

<title>Sky World | Reservation </title>

<div class="row">
	<br><br><br><br><br><br>
	<p style="color: white; text-align:center; font-size:50px;"> <b> Book a Ticket </b> </p>
	<br><br>
</div>

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="sparkline10-list mt-b-30">
				<div class="sparkline10-graph">
					<div class="basic-login-form-ad">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="basic-login-inner inline-basic-form">
									<div class="tab-content-details shadow-reset">
									<form action="{{route('reserve.store')}}" method="POST">
										@csrf
										<div class="form-group-inner">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
													<select class="form-control custom-select-value" name="park">
														<option value="">- Select a Themepark -</option>
														@foreach ($themeparks as $id => $name)
															<option value="{{$id}}" >
																{{ (isset($booking['park_id']) && $booking['park_id'] == $id) ? ' selected' : '' }} {{$name}}
                                       						</option>
														@endforeach
													</select>	
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
													<input type="number" class="form-control" name="quantity" placeholder="eg: 2" />
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
													<input class="form-control" type="date" name="date" required>
												</div>
												<div class="login-btn-inner pull-right">
													<div class="col-lg-3 col-md-5 col-sm-5 col-xs-12">
														<button class="btn btn-md btn-primary login-submit-cs" type="submit">Book</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection