<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CheapFlightsFirst.com - Gateway to Cheapest Flight Deals</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body{
		padding: 0px;
		margin: 0px;
		color: #383636;
	}
	a{
		color: #0093cc;
	}
	.wraper{
		margin: 0 auto;
	}
	@media (min-width: 768px) {
		.wraper {
		    width: 600px
		}
	}
	@media (max-width: 768px) {
		.wraper {
		    margin: 0px;
		    width: 100%;
		}
	}
</style>
</head>
<body style="font-family: sans-serif; background-color: #f7f7f7;">
	<div class="wraper" style="background-color: #fff;box-shadow: 0px 0px 5px #a9a9a947;border: 1px solid #fff;">
		<section class="head_sec" style="clear: both;padding: 5px 15px;box-sizing: border-box;">
			<h1 style="text-align: center;color: #ffffff;background-color: #f7951d;margin: 0;padding: 15px 15px;">Welcome to The Tripbust</h1>
			<div class="div-left" style="float: left;">
				<p><strong>Booking Number:</strong>  </p>
			</div>
			<div class="div-right" style="float: right;">
				<p><strong>Booked On: </strong> </p>
			</div>
		</section>

		<section class="section_2" style="clear: both;background-color: #f7fafb;width: 100%;min-height: 80px;padding: 10px 15px;border-top: 2px solid #0159bb;border-bottom: 2px solid #faa916;box-sizing: border-box;">
			<div class="div-left" style="float: left;">
				<a href="#"><img src="http://cheapflightsfirst.com/assets/images/logo.svg" width="200px"></a>
			</div>
			<div class="div-right" style="float: right;">
				<p><strong>Customer Support</strong><br> +1 (833) 930-1616</p>
			</div>
		</section>

		<section class="section_3" style="background-color: #ffffff;padding: 15px 15px;position: relative;min-height: 400px;background-image: url(http://cheapflightsfirst.com/assets/images/bg-img2.png);background-size: contain;background-position: bottom;background-repeat: no-repeat;">
			<div class="content_wrap" style="">
				<p style="margin-top: 0;">{{ $post_data['fname'] }} {{ $post_data['mname'] }} {{ $post_data['lname'] }},</p>
				<p style="font-size: 14px;">Here's your flight itinerary. Please retain this confirmation code to reference your booking. We look forward to seeing you onboard.</p>
				<p style="font-size: 14px;"><b>Note: </b> For Security purposes you may receive a call from us within 24 hours for credit card verification. *Your e-tickets will be sent post credit card verification.*</p>

				<p style="font-size: 14px;">To View your Confirmation online <a href="https://travofy.com/flight/confirmation?fltref=492714a4389c-39f9-7e11-89c40eb7b395"> Click here</a></p>

				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>Contact Detail</b></h4>
				<p style="font-size: 14px;margin-bottom: 5px;margin-top: 0px;"><strong>Name:</strong> {{ $post_data['fname'] }} {{ $post_data['mname'] }} {{ $post_data['lname'] }}</p>
				<p style="font-size: 14px;margin-bottom: 5px;margin-top: 0px;"><strong>Email:</strong> {{ $post_data['email'] }}</p>
				<!--<p style="font-size: 14px;margin-bottom: 5px;margin-top: 0px;"><strong>Phone:</strong> 9999999999</p>-->

				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>Itinerary Detail</b></h4>

				<p style="font-size: 14px; margin-bottom: 5px;margin-top: 0px;">{{ $data->route[0]->origin }} - {{ $data->route[0]->dst}} 03h 09m - Nonstop</p>
				<p style="font-size: 13px; margin-bottom: 5px;margin-top: 0px;"><b>{{ $data->route[0]->airlines }} 01:30 PM - 04:39 PM ( Departure at 01:30 PM Mon. Jun 12)</b></p>
				<p style="font-size: 14px;">{{ $data->route[0]->origin_airport }}  ({{ $data->route[0]->origin }}) to {{ $data->route[0]->dst_airport }} ({{ $data->route[0]->dst}})</p>

				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>{{  $data->route[0]->aircraft }} operated by United Airlines</b></h4>
				<p style="font-size: 14px;">
					<span>BASIC_ECONOMY | 739</span><br>
					<span>Arrives at MIA, 04:39 PM on Monday Jun 12 2017</span><br>
					<span>MIA - EWR 02h 56m - Nonstop</span><br>
					<span>United Airlines 06:00 AM - 08:56 AM ( Departure at 06:00 AM Wed. Jun 28)</span>
				</p>

				<p style="font-size: 14px;">Miami International (MIA) to Newark Liberty International (EWR)</p>
				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>Flight 1527 operated by United Airlines</b></h4>
				<p style="font-size: 14px;">
					<span>BASIC_ECONOMY | 320</span><br>
					<span>Arrives at EWR, 08:56 AM on Wednesday Jun 28 2017</span>
				</p>

				<p style="font-size: 14px;"><b>Please note : </b> As Airlines have frequent schedule changes, please call the Airline 24 hours before departure to reconfirm your flight details. Airline Phone Numbers</p>
				<p style="font-size: 14px;">Your ticket is <b> *NON-REFUNDABLE* </b>. For any changes to dates or routing, please call our Customer Service. These changes may have airline penalty and our fees. Some flights may be completely <b> *NON CHANGEABLE* </b> even with an airline penalty.</p>

				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>Passenger Details</b></h4>
				<p style="font-size: 14px;">Traveler Name Type Date of Birth Seat Request Meal Preference</p>
				<p style="font-size: 14px;">
					<span>{{ $post_data['fname'] }} {{ $post_data['mname'] }} {{ $post_data['lname'] }}</span><br>
					<span>ADULT</span><br>
					<span>{{ $post_data['dob-day'] }}-{{ $post_data['dob-month'] }}-{{ $post_data['dob-year'] }}</span>
				</p>
				<p style="font-size: 14px;">
					<b>Disclaimer:</b><br> All meal preferences, seat requests are not guaranteed. Please contact your airline to reconfirm that they have received this request and confirmed it.

				</p>

				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>Price Details</b></h4>
				<p style="font-size: 14px;">Base Fare Taxes & Fees Total Price</p>
				<p style="font-size: 14px;">Fare - Adult</p>
				<p style="font-size: 14px;">
					<span>£199.39</span><br>
					<span>£36.78</span>
				</p>
				<p style="font-size: 14px;">
					<span>£238.47</span><br>
					<span><b>Total Trip Cost* *£238.47</b></span><br>
				</p>

				<h4 style="background-color: #231f20;padding: 5px 10px;color: #f7951d;margin-bottom: 10px;"><b>Contact Us</b></h4>
				<p style="font-size: 14px;">
					<b>Contact Number: </b><span> +1 (833) 930-1616</span><br>
					<b>Email: </b><span> support@cheapflightsfirst.com</span><br>
				</p>

				<p style="font-size: 14px;"><b>Please Note:</b><br>Please print and keep this receipt. Your credit card may be billed in multiple charges totaling the above amount. Some airlines may charge <a href="https://bags.amadeus.com/Display.aspx?a=UA"> baggage fees </a> For more information please review our <a href="https://cheapflightsfirst.com/"> terms and conditions & privacy policy </a></p>

				<p style="font-size: 14px;">Thank you for using <b> CheapFlightsFirst. </b></p>
				<p style="font-size: 14px;">
					<span>If you need any assistance, please call us at +1 (833) 930-1616 or email us at</span><br>
					<span><a href="#">support@travofy.com</a></span><br>
					<span><a href="https://travofy.com/terms-conditions">Terms & Conditions</a></span>
				</p>
				<div style="background-color: #ffffffed;box-shadow: 0px 0px 5px #00000014;padding: 5px 15px;border-radius: 5px;">
				<p style="font-size: 14px;">This email and any files transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. If you have received this email in error please notify the system manager.
				Please note that any views or opinions presented in this email are solely
				those of the author and do not necessarily represent those of the company.
				Finally, the recipient should check this email and any attachments for the
				presence of viruses. The company accepts no liability for any damage caused
				by any virus transmitted by this email
				</p>
				</div>
				<p style="font-size: 14px;"></p>
			</div>
		</section>


		<footer class="footer-sec" style="background-color: #434b58; padding: 10px 15px;">
	     	<p style="text-align: center; margin-bottom: 0px; margin-top: 0px;">
		     	<a style="color: #ffffff;" href="#">Home</a>
		     	<a style="color: #ffffff;" href="https://travofy.com/terms-conditions">Privacy</a>
		     	<a style="color: #ffffff;" href="https://travofy.com/terms-conditions">T&Cs</a>
	     	</p>
	    </footer>

	</div><!--/wraper-->

	<!--footer-->
  	
</body>
</html>
