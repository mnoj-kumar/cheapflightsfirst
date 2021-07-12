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
					<h1 class="font-30">Last Minute Flights</h1>
					<img src="assets/images/last-minute-travel.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">People believe that booking can save a significant amount but what if the plan is made at the last minute? Can a good deal be availed easily? Undoubtedly, sooner or later, we all have to book a last-minute flight. Regardless of whether it's for business travel or personal reasons, the price can be costly and the charges can be annoying. Even though it seems like you have no other choice, connecting Cheapflightsfirst can help you save some money when booking last-minute flights.</p>

					<h2 class="font-30">Go Wherever You Want To Go!</h2>
					<p class="font-14 text-justify">As we all know last minutes booking can cause a significant amount of loss that no one wants to pay. Well, you don’t have to. You will get the best offers even last minutes flights also. No matter where you are flying domestic or internationally Cheapflightsfirst has come up with great deals where you can save a significant amount on your last-minute flight booking as well. </p>
					<p class="font-14 text-justify">Cheapflightsfirst offers flight booking with several airlines globally. Regardless of whether you're taking a short-haul or long-haul flight, you'll find what you're searching for when you look for flights with us. Our flight booking page will give you the best for any of your bookings. And looking through low-cost flights, our booking process makes it simpler to get your hands on cheap flight tickets.</p>

					<h3>Check Out Our Last Minute Flight Offers</h3>
					<p class="font-14 text-justify">Cheapflightsfirst page likewise offers a choice of specials offers on your flight booking, so you will not need to look far to discover modest flights. Our pick of top offers and arrangements is updated & providing you with the most recent information and costs. In case you're searching for inspiration for your next excursion away, our deals and special offers are an incredible sign to begin your trip with top carriers. At the point when you book with us, you'll have the option to take your pick from probably the least expensive trips around.</p>
					
					<h4>Enjoy Hassle-Free Bookings</h4>
					<p class="font-14 text-justify">There are ample deals available on Cheapflightsfirst that are easy to avail of. So, whenever you need to book your last-minute flights enter your destination, travel dates, number of passengers, travel class & hit on the “search” button & you will instantly see all the flight options on the very next page. Here you will see every detail with prices at a glance.</p>

					<h5>For Queries Contact Us!</h5>
					<p class="font-14 text-justify">Check out our featured deals for the best of our offers on airfares or use our advanced travel booking widget to find and book flights to your favorite vacation destination. Also, for further queries and learning call us at our 24*7 Toll-Free Customer Care Support and the team will be delighted to serve you with the best travel plans.</p>
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