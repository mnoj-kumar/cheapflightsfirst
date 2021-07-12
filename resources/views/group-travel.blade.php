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
					<h1 class="font-30">Hunting For Exciting Deals To Explore Places with Your Group?</h1>
					<img src="assets/images/group-travel.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">Traveling is always about seeking adventures with your loved ones. These adventures become more joyful and memorable when you plan with your favorite group to make unforgettable memories. Friends always inspire you to travel more and share exciting adventures and memories so that you can make an unbreakable bond with them.  If you are thinking or wondering to travel with your big gang of friends to your dream destination then, you are going towards a right direction.</p>
					<p class="font-14 text-justify"><b>CheapFlightsfirst </b> is dedicated to make your plans to give you a feeling of joy. The travel expertise is delivering the knowledge for reasonable group travel, amazing deals and customized packages. They also understand that Life is meant for seeking the greatest adventures with your great friends. They understand how much fun you perceive when you travel in a group. It’s always fun and memorable to travel with the ones you love. </p>
					
					<h2 class="font-30">Dream | Discover</h2>
					<p class="font-14 text-justify">To enhance the appeal of this great fun with your special buddies, CheapFlightsfirst, gives you an opportunity to provide you the competitive group traveling offers and wonderful deals to help you in saving a great amount on your budget. You can experience the joy of traveling or making journey together when having reservations for group travels from the right travel advisors. You need to sign for email alerts and news daily to know about when you can have the flight bookings for group travels. With the help of travel advisors, you can always know about the deals for Group Travels.</p>

					<h3>Benefits For Group Travels</h3>
					<p class="font-14 text-justify">Whenever you travel with your friends in a group you are not discounted but you receive a great advantages and flexibility too. Following are some points that will inspire you to travel with your loved ones immediately:</p>
					<ul>
						<li class="font-14">You receive a one guaranteed price for all the travelers who are part of the group travel</li>
						<li class="font-14">Dedicated and the specialised team who is having a great knowledge and years of experience</li>
						<li class="font-14">All the travelers of a group travel can sit together while having a journey</li>
						<li class="font-14">Your Luggage allowance can be shared among each other</li>
						<li class="font-14">You can pay the amount of tickets through using different cards of your friends</li>
						<li class="font-14">Your Travel group can be split into smaller bookings</li>
						<li class="font-14">You get the service for name changes at no applicable charge for 14 days prior to your departure</li>
					</ul>

					<h4>Take Help − For Group Travels</h4>
					<p class="font-14 text-justify">For an instant assistance for special group fares of more than 10 people or less you can go to the way of searching through the link. We hold the professional expertise that deliver you hassle-free services for getting the best deals on Group travels. For your great help in getting the knowledge for deals on Group travels and low-fare flights, the travel advisors are always dedicated. They are available to help you in making the right reservations. Make <b> Cheapflightsfirst </b> your first choice and see, what opportunities are waiting for you to get discovered. </p>
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