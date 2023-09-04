@extends('custlayout2')

@section('content')

<div class="row">
	<br><br>
	<p style="color: white; text-align:center; font-size:50px;"> <b> Customer's Profile </b> </p>
	<br><br>
</div>

<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="sparkline9-list responsive-mg-b-30"> 
				<div class="sparkline9-graph">
					<div class="basic-login-form-ad">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="basic-login-inner">
									<form method="POST" action="{{route('custProfile.update', auth()->user()->id)}}">
										@csrf
                   						@method('PUT')
										<div class="form-group-inner">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<label class="login2">Name</label>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<input type="text" class="form-control" name="name" value=" {{ Auth::user()->name }}" />
												</div>
											</div>
										</div>

										<div class="form-group-inner">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<label class="login2">Email</label>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<input type="email" class="form-control" name="email" value=" {{ Auth::user()->email }}" />
												</div>
											</div>
										</div>

										<div class="form-group-inner">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<label class="login2">Phone </label>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<input type="text" class="form-control" name="phone" value=" {{ Auth::user()->phone_number }}" />
												</div>
											</div>
										</div>

										<div class="form-group-inner">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<label class="login2">Password</label>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<input type="password" class="form-control" name="password"  placeholder="*******" />
												</div>
											</div>
										</div>
										<div class="login-btn-inner">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<div class="login-horizental">
														<button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
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
				<br>
				@if(Session::has('success'))
                <p class="text-success"> <b> Profile is updated successfully. </b> </p>
                @endif
			</div>
		</div>
		


@endsection

