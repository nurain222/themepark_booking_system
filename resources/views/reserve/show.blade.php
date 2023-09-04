
<html>
	<head>
		<style lang="scss">
		@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
		body,html {
		  height:100%;
		  margin:0;
		  font-family:lato;
		}

		h2 {
		  margin-bottom:0px;
		  margin-top:25px;
		  text-align:center;
		  font-weight:200;
		  font-size:19px;
		  font-size:1.2rem;
		  
		}
		.container {
		  height:100%;
		  -webkit-box-pack:center;
		  -webkit-justify-content:center;
			  -ms-flex-pack:center;
				  justify-content:center;
		  -webkit-box-align:center;
		  -webkit-align-items:center;
			  -ms-flex-align:center;
				  align-items:center;
		  display:-webkit-box;
		  display:-webkit-flex;
		  display:-ms-flexbox;
		  display:flex;
		  background:-webkit-linear-gradient(#c5e5e5, #ccddf9);
		  background:linear-gradient(#c9e5e9,#ccddf9);
		}
		.thin {
		  font-weight:400;
		}
		.small {
		  font-size:12px;
		  font-size:.8rem;
		}
		.half-input-table {
		  border-collapse:collapse;
		  width:100%;
		}
		.half-input-table td:first-of-type {
		  border-right:10px solid #4488dd;
		  width:50%;
		}
		.window {
		  height:540px;
		  width:1200px;
		  background:#fff;
		  display:-webkit-box;
		  display:-webkit-flex;
		  display:-ms-flexbox;
		  display:flex;
		  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
		  border-radius:30px;
		  z-index:10;
		}
		.order-info {
		  height:100%;
		  width:50%;
		  padding-left:25px;
		  padding-right:25px;
		  box-sizing:border-box;
		  position:relative;
		}
		.price {
		  color:#4488dd;
		}
		.order-table td:first-of-type {
		  width:100%;
		}
		.order-table {
			position:relative;
		}
		.line {
		  height:1px;
		  width:100%;
		  margin-top:10px;
		  margin-bottom:10px;
		  background:#ddd;
		}
		.order-table td:last-of-type {
		  vertical-align:center;
		}
		.order-info-content {
		  table-layout:fixed;

		}

		.full-width {
		  width:100%;
		}
		.pay-btn {
		  border:none;
		  background:#ff1577;
		  line-height:2em;
		  border-radius:10px;
		  font-size:19px;
		  font-size:1.2rem;
		  color:#fff;
		  cursor:pointer;
		  position:absolute;
		  bottom:25px;
		  width:calc(100% - 50px);
		  -webkit-transition:all .2s ease;
				  transition:all .2s ease;
		}
		.pay-btn:hover {
		  background:#bf115a;
			color:#eee;
		  -webkit-transition:all .2s ease;
				  transition:all .2s ease;
		}

		.total {
		  margin-top:25px;
		  font-size:20px;
		  font-size:1.3rem;
		  position:absolute;
		  bottom:30px;
		  right:27px;
		  left:35px;
		}
		.dense {
		  line-height:1.2em;
		  font-size:16px;
		  font-size:1rem;
		}
		.input-field {
		  background:rgba(255,255,255,0.1);
		  margin-bottom:10px;
		  margin-top:3px;
		  line-height:1.5em;
		  font-size:20px;
		  font-size:1.3rem;
		  border:none;
		  padding:5px 10px 5px 10px;
		  color:#fff;
		  box-sizing:border-box;
		  width:100%;
		  margin-left:auto;
		  margin-right:auto;
		}
		.credit-info {
		  background:#4488dd;
		  height:100%;
		  width:50%;
		  color:#eee;
		  -webkit-box-pack:center;
		  -webkit-justify-content:center;
			  -ms-flex-pack:center;
				  justify-content:center;
		  font-size:14px;
		  font-size:.9rem;
		  display:-webkit-box;
		  display:-webkit-flex;
		  display:-ms-flexbox;
		  display:flex;
		  box-sizing:border-box;
		  padding-left:25px;
		  padding-right:25px;
		  border-top-right-radius:30px;
		  border-bottom-right-radius:30px;
		  position:relative;
		}
		.credit-card-image {
		  display:block;
		  max-height:90px;
		  margin-left:auto;
		  margin-right:auto;
		  margin-top:35px;
		  margin-bottom:15px;
		}
		.credit-info-content {
		  margin-top:25px;
		  -webkit-flex-flow:column;
			  -ms-flex-flow:column;
				  flex-flow:column;
		  display:-webkit-box;
		  display:-webkit-flex;
		  display:-ms-flexbox;
		  display:flex;
		  width:100%;
		}
		@media (max-width: 600px) {
		  .window {
			width: 100%;
			height: 100%;
			display:block;
			border-radius:0px;
		  }
		  .order-info {
			width:100%;
			height:auto;
			padding-bottom:100px;
			border-radius:0px;
		  }
		  .credit-info {
			width:100%;
			height:auto;
			padding-bottom:100px;
			border-radius:0px;
		  }
		  .pay-btn {
			border-radius:0px;
		  }
		}
		   .header {
			padding: 20px;
			color: white;
			font-size: 35px;
			text-align: center;
			font-weight:bold;
			}
			
		.box-content {
		  background-color: white;
		  color: black;
		  padding: 10px;
		  margin-top: 20px;
		  margin-bottom: 20px;
		  border-radius:10px;
		}
		.popup {
		  display: none;
		  position: fixed;
		  padding: 10px;
		  width: 280px;
		  left: 50%;
		  margin-left: -150px;
		  height: 180px;
		  top: 50%;
		  margin-top: -100px;
		  background: #FFF;
		  z-index: 20;
		  text-align:center
		  color:black
		}

		#popup1 {
		  -webkit-box-shadow:  0px 0px 0px 9999px rgba(0, 0, 0, 0.5);
		  box-shadow:  0px 0px 0px 9999px rgba(0, 0, 0, 0.5);
		}
		
		.btn-ok 
		{
			display: block;
			margin:auto;
			margin-top:30px;
			text-align: center;
			color: #fff;
			background-color: #ff1577;
			font-weight: 700;
			padding: 8px 20px;
			border-radius: 4px;
			border: none;
			-webkit-transition:all .2s ease;
				  transition:all .2s ease;
		}
		.btn-ok:hover {
		  background:#bf115a;
			color:#eee;
		  -webkit-transition:all .2s ease;
				  transition:all .2s ease;
		}
		</style>
		<script>
			$ = function(id) {
			  return document.getElementById(id);
			}

			var show = function(id) {
				$(id).style.display ='block';
			}
			var hide = function(id) {
				$(id).style.display ='none';
			}
		</script>
	</head>
	<body>
		<div class='container'>
		  <div class='window'>
			<div class='order-info'>
			  <div class='order-info-content'>
				<h2>Booking Summary</h2>
						<div class='line' class='full-width'></div>
				<table class='order-table' class='full-width'>
				  <tbody>
					<tr>
						<td><span class='thin'> {{$reserve->themepark->park_name}} </span></td>
						<td rowspan='2'><div class='price'>RM{{$reserve->themepark->park_price}} </div></td>
					</tr>
					<tr>
						<td><span class='thin'>{{$reserve->date}}</span></td>
					</tr>
				  </tbody>
				</table>
				<div class='line'></div>
				<div class='total'>
				  <span style='float:left;'>
					<div class='thin dense'>Quantity</div>
					TOTAL
				  </span>
				  <span style='float:right; text-align:right;'>
					<div class='thin dense'> {{$reserve->quantity}} tickets </div>
					RM{{$reserve->total_price}}
				  </span>
				</div>
			</div>
		</div>
				<div class='credit-info'>
				  <div class='credit-info-content'>
					
					<img src='{{asset('')}}/receipt/images/logos.png' height='90' class='credit-card-image' id='credit-card-image'></img>
					<div class='header'>
						Customer Information
					</div>
					Booking ID:	{{$reserve->id}} 
					<br>Full Name:	{{$reserve->customer->name}}
					<br>Phone Number:	{{$reserve->customer->phone_number}}
					<br>Email:	{{$reserve->customer->email}}
					<div class='box-content'>
						<b>***Note To Our Dear Customers</b>
						<br><br>Customer is obligated to show the Booking ID at the counter given after booking process to confirm your payment.
						<br><br>Thank you!
					</div>
					<button id="confirm" onclick="show('popup1')" class='pay-btn'> Done </button>
					<div class="popup" id="popup1" style="text-align:center;color:black">
					  <h3>Thank You For Booking!</h3>
					  <p>Your Order ID is {{$reserve->id}} . Please don't forget to show this receipt when visiting. Enjoy! </p>
					  <button class='btn-ok' onclick="location.href = '{{ route('reserve.index') }}';" >Ok</a>
					</div>
				  </div>
				</div>
			  </div>
			  
		</div>
	</body>
</html>