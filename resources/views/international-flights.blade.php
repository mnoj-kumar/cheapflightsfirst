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
					<h1 class="font-30">Tour The World From Your Couch Through Best Deals On International Flights</h1>
					<img src="assets/images/international-flights.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">Looking for great offers and deals on International flights? If Yes, you have come to the right path. Well, Flights to Venice, or Flights to Paris looks so exciting when you think of making random plans, but this won’t give you a sense of relief. <b> CheapFlightsFirst </b> offers an opportunity for travel seekers that help them in finding an enjoyable getaway anywhere in the world. This won’t put a strain on your wallet, you can choose endless destinations to explore with your loved ones. There are many travel advisors who help you in getting the right information on scoring the biggest deals on International flights. You get the instant help anytime. </p>
					
					<h2 class="font-30">What’s New?</h2>
					<p class="font-14 text-justify">Whether you are looking for hassle-free journey for work or leisure, you can always find exciting deals and offers for all International flights. You can have cheap reservations from the United States to any amazing destination according to your interest. A place like Las Vegas can be your Tourist destination or any other place full of beaches like Miami. Make sure you ask the travel advisors for latest deals and offers that are waiting for you to get explored, so what are you waiting for? Score the affordable flights now to your dream International destination.</p>

					<h3>Hit The Cheap Flights For International Destinations</h3>
					<p class="font-14 text-justify">You can take flights to anywhere but it is important to check for the greatest deals and offers. For getting the greatest deals and offers for International flights you must check the following details:</p>
					<ul>
						<li><p class="font-14"><b>Be flexible</b><br>There are several options for saving on international flights, If you think your travel dates are flexible. In short, you can receive an opportunity of receiving the wonderful-low-cost flight tickets to anywhere that is what you have been looking for!</p></li>
						<li><p class="font-14"><b>Consider alternative airports</b><br>Once you are done with mentioning the departure point and destination, you will see the authentic list of flight fares. You can choose the flights according to your budget or convenience. Make sure you don’t forget to check the flights on alternative airports, it is going to help you in getting a great fare for International flights.</p></li>
						<li><p class="font-14"><b>Search by date</b><br>If you think you can’t change the traveling dates then you don’t have to worry… Make sure you search by date to check different range of flight deals available from the partners which is based on your recommended travel dates.</p></li>
					</ul>

					<h4>Join Our Crew Now For Deals on International Flights </h4>
					<p class="font-14 text-justify">Traveling never seems so easy and worthwhile, but with CheapFlightsFirst, you won’t have to worry about travel budget overshooting.  With the help of travel smarts, you can search for greatest flights and vacation packages for International flights. You can always compare the airfare offers to get the lowest price for your every trip. Travel advisors present here help you in getting the instant solutions that makes your exciting trips to International destinations. You can always ask them about latest deals and offers on International Flights.</p>
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