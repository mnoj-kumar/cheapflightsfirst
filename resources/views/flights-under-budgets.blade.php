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
					<h1 class="font-30">Take Flights Under Budget With Unpublished And Exciting Deals Anytime</h1>
					<img src="assets/images/flight-under-budget.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">Thinking to take a break from your daily humdrum? Take Flights to your dream destinations under your budget. If you wondering how you can get cheap flights to your destinations, well, with the help of Cheapflightsfirst, you can fly to your favorite destination off the bucket list and make thousands of memories with your loved ones. The reliable travel team is available to help you with the queries and questions you have for your upcoming flights. You can always know what opportunities are waiting for you.</p>

					<h2 class="font-30">What’s New?</h2>
					<p class="font-14 text-justify">Whether you love going to beaches or love going to theme-parks, every destination serves you memories on purpose. You can choose any destination that fascinates you. There are many cultural attractions that you can explore when you choose one destination. There are many opportunities you can look for when you go for an option of Flights Under Budget by Cheapflightsfirst. Check the following flight’s opportunities:</p>
					<ul>
						<li><p><b>Flights Under $100</b><br>With Cheapflightsfirst delivering hassle-free flights under $100, you can easily book your next getaway. The amazing deals are under $100 will take you directly to a rejuvenating break without worrying about the budget at all. We are offering you flight tickets under $100 for plenty of destinations to choose. You can choose one that you really want to explore with your special ones and make unforgettable memories.</p></li>
						<li><p><b>Flights Under $200</b><br>With the help of Cheapflightsfirst, you can know about the wonderful deals that will help you to save a good amount on your budget. The travel advisors available at Cheapflightsfirst are delivering unbelievable deals for all the flights. You can know about Flights Under $200 through which you can have your budget-friendly journey, so what are you waiting for? You can grab the amazing opportunities that are waiting for you with the help of travel advisors. </p></li>
					</ul>

					<h3>Pick Your Destination− Anywhere in the World</h3>
					<p class="font-14 text-justify">For every kind of destination, whether it takes you to beaches or mountains, you can explore with having the greatest offers, deals, and discounted packages available. There are opportunities for flights under budget for all the kinds of travel seekers, flights are so cheap that there is no better way to explore the world. you can grab the greatest deals or budget-friendly flights and treat your beloved with a beautiful gift to a beautiful destination. You can also surprise your parents by sending them a flight ticket they have been waiting to explore.</p>

					<h4>Discover The World Like Never Before−</h4>
					<p class="font-14 text-justify">Travel advisors or delegates available here at Cheapflightsfirst provides you a way to your dream destinations. They understand each travel requirements. They deliver everything you require from your flights and to the cabins and more. You can look for flights that are designed according to your budget requirements. You can always know what’s extra you are going to receive from them.  The customer advisors are going to help you, available round the clock, so go and explore the places like never before.</p>
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