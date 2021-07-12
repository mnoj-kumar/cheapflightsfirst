@extends('layouts.index', [

	'namePage' => 'home',

	])

	@section('content')


	

<style type="text/css">
.page-section {
    padding: 30px 0px;
    background-color: #f8f8f8;
}
.f-content-box {
    background-color: #fff;
    box-shadow: 0px 0px 10px #0000001a;
    border-radius: 3px;
    border-top: 2px solid #ee0017;
}
.font-30{
	font-size: 30px;
}
.font-14{
	font-size: 14px;
    letter-spacing: 0.7px;
}
</style>

<section class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-12">
				<div class="f-content-box mb-3 p-3">
					<h1 class="font-30">Weekend Getaway Flights</h1>
					<img src="assets/images/weekend-getway.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">When we think to take a vacation several pictures come to mind. The best part is our world never leaves to amaze us. Every time it brings uncountable numbers of places on the table that are hard to cover even in years. However, we can cover at least a few of them. So, whether you are looking for a quiet weekend or a fun-filled escape with your loved ones, we have got you covered.</p>
					<p class="font-14 text-justify">After all who wants to skip weekend fun after such a long weekday hectic schedule? Undoubtedly, going on weekends is like getting different vibes & refreshments. So, what are you waiting for? Take an awaited trip with your loved ones with all available money-saving offers. Get travel packages to maximize your savings & pack your stuff & don’t forget to bring the camera and be ready for a vacation like none. So, for the same be a part of <b> CheapFlightsFirst.com </b> & enjoy the super saving sale. </p>

					<h2 class="font-30">Get Exclusive Discounts For Every Type Of Your Vacation</h2>
					<p class="font-14 text-justify">What kind of vacation you are seeking or what kind of traveler you are? Sun seeker, Adventurer, Cultural Explorer, Foodie? Or Solo traveler, Couple, Family? Connecting with CheapFlightsFirst can help you to get your vacation going within reasonable budgets. So, find great deals & packages for your getaway by enjoying weekends on your own choices.</p>
					<p class="font-14 text-justify">Get massive discounts on flights to top vacations across the planet. Check out all not-to-be-missed offers & enjoy a vacation with your loved ones without exceeding your budget. Get ready and visit some of the most coveted destinations in the world. Because now is the time to enjoy & live the bucket list dream in real by going to the desired destination. So, get your camera ready for taking all the amazing weekend pictures & make your Instagram more colorful with crazy weekend vibes.</p>

					<h3>Book Your Weekend Flights</h3>
					<p class="font-14 text-justify">To book your weekend flights open the booking tab & enter the destination, travel dates plus other required information & check out the whole new flight list as per your search. Here you will see the complete information like how much time your flight going to take or how much you need to pay & so on. Be it a domestic destination or an international one, you will get a good price for all your bookings. Additionally, purchasing in advance will give you great benefits & booking a flight ticket is a mandatory step as it confirms that your travel plan is on. </p>
					<p class="font-14 text-justify">Using CheapFlightsFirst means you are in a good place where you will get exclusive discounts. Also, this site made simple the whole booking process as it has an extremely user-friendly interface that offers some other special perks too. Also, to get travel updates to subscribe the ChepFlightsFirst newsletter & enjoy the rest. In case if you have any queries, feel free to contact our 24/7 available travel expert.</p>
				</div>
			</div>


			<div class="col-md-3 col-12">
				<div class="f-content-box mb-3 p-2">
					<div class="input-group mb-3">
					  <input type="text" class="form-control">
					  <div class="input-group-append">
					    <span class="input-group-text red-bg" id="basic-addon2"><i class="fa fa-search text-white"></i></span>
					  </div>
					</div>
				</div>
				<div class="f-content-box mb-3">
					<div class="list-group">
					  <a href="domestic-flights" class="list-group-item list-group-item-action red-bg text-white" aria-current="true">
					    Domestic Flights
					  </a>
					  <a href="international-flights" class="list-group-item list-group-item-action">International Flights</a>
					  <a href="round-trip" class="list-group-item list-group-item-action">Round Trip/ One Way Flights</a>
					  <a href="group-travel" class="list-group-item list-group-item-action">Group Travel</a>
					</div>
				</div>
				<div class="f-content-box mb-3">
					<div class="list-group">
					  <a href="last-minute-flights" class="list-group-item list-group-item-action">Last Minute Flights</a>
					  <a href="red-eye-flights" class="list-group-item list-group-item-action">Red Eye Flights</a>
					  <a href="weekend-getaways" class="list-group-item list-group-item-action">Weekend Getaway</a>
					</div>
				</div>
				<div class="f-content-box mb-3">
					<div class="list-group">
					  <a href="flights-under-budgets" class="list-group-item list-group-item-action">Flights under Budget</a>
					  <a href="flights-by-class" class="list-group-item list-group-item-action">Flights based on Class</a>
					</div>
				</div>
			</div>
		</div><!--/row-->
	</div><!--/conatiner-->
</section>
<!--/page-section-->


@endsection