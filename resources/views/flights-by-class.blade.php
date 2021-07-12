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
					<h1 class="font-30">Fly High To Your Dream Destination Through Top-Notch Cabin Classes</h1>
					<img src="assets/images/flight-by-class.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">Go anywhere in the world, take flight to any place the way you travel matters a lot. The way you make your journey matters a lot. All your journeys mean all the services you have being offered by the top-notch staff of all the airlines. For your every journey make sure you are choosing the right airlines, and make sure you are choosing the right cabin to fly comfortably to your destination.</p>
					<p class="font-14 text-justify">With the help of CheapFlightsFirst, you get the opportunity to fly in the comfortable and hassle-free way to your desired destination. The travel delegates present here helps you to know about the cabin classes available that suits your comfort as well as budget. They guide you to know about luxurious amenities, worthwhile services and endless opportunities you are being offered when you fly high.</p>

					<h2 class="font-30">First-Class Flights</h2>
					<p class="font-14 text-justify">As Airlines is upgrading its luxurious amenities each and every day, people have started focusing on the comfort space more, the perfect ambiance, the seating services, hospitality they receive and more. If you are feeling you are into the same category then, don’t worry. Flying First-class has become cheap if you are looking for affordable flights booking. You can easily think of choosing your dream destination and fly there in the worthwhile and luxurious way. With the help of Cheapflightsfirst, you can for greatest offers and deals you are being offered by the top-notch travel delegates.</p>

					<h3>Tips| Cheap First-class Flights</h3>
					<p class="font-14 text-justify">For getting cheap first-class flights make sure you follow the mentioned points:</p>
					<ul>
						<li>Make sure you are not booking first-class flights directly</li>
						<li>Make sure you are being Loyal to the Royalty programmes</li>
						<li>Use Airline’s credit cards for flight bookings</li>
					</ul>

					<h4>Business Class Flights</h4>
					<p class="font-14 text-justify">You must be aware of Business Class is an awe-inspiring way that makes your way memorable to your desired destination. Well, for any destination you choose and for any return city you choose, the way you travel matters a lot. If you are thinking to make your hassle-free journey then make sure you are taking the Business Class flights that makes your worthwhile journey with your special ones.</p>
					<p class="font-14 text-justify"><b>Tips| Cheap First-class Flights</b></p>
					<p class="font-14 text-justify">For getting cheap Business Class flights make sure you follow the mentioned points:</p>
					<ul>
						<li>Make sure you Sign up for Fare Alerts</li>
						<li>Upgrade with points</li>
						<li>Be flexible with your traveling dates</li>
					</ul>

					<h5>Premium Economy Class Flights</h5>
					<p class="font-14 text-justify">If you are wondering how you can save a lot on your budget through Premium Economy flights, well, CheapflightsFirst helps you in getting the right way of knowing about Premium Economy class flights.  You can always know about the facilities and the amenities you are going to receive. Premium Economy class is the perfect way to book your cheap flights to your destination. So what are you waiting for? You can plan your journey as there are wonderful offers and deals available that help you in getting pocket-friendly flights.</p>

					<p class="font-14 text-justify"><b>Tips| Cheap Premium Economy Class Flights</b></p>
					<p class="font-14 text-justify">For getting cheap Premium Economy Class flights make sure you follow the mentioned points:</p>
					<ul>
						<li>Make sure you are flexible with your traveling dates</li>
						<li>Make sure you look for festive offers</li>
						<li>Make sure you check on their customized packages</li>
					</ul>

					<h5>Ask the Advisors- What’s is best for you?</h5>
					<p class="font-14 text-justify">With the help of cheapflightsfirst, you make a memorable way to your destination. Whether you are making your plans with your friends or family, you are being delivered an excellent and remarkable service by travel advisors. They are trained and educated enough to provide you the reliable directions that makes your journey super-interesting. You can always reach to them for any kind of query or an issue regarding your flights. If you are having any kind of issue regarding picking a cabin class that best suits then, communicate with them any time. </p>
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