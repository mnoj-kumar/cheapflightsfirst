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
					<h1 class="font-30">Traveling is Always a Good Idea, Score Biggest Deals on Domestic Flights</h1>
					<img src="assets/images/domestic-flight.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">Every travel seeker has experienced tiresome for repeated searching about the cheapest flights to any desired destination. As there are endless search engines and fluctuating prices, the right style to frugal flight booking is awe-inspiring.</p>
					<p class="font-14 text-justify">Every travel seeker has experienced tiresome for repeated searching about the cheapest flights to any desired destination. As there are endless search engines and fluctuating prices, the right style to frugal flight booking is awe-inspiring.Whether you are wondering to plan a holiday outside your country or inside, booking of affordable flights is always a major issue especially during the peak season because of unavailability of seats or higher fare flights. To top it all, there are relevant concerns regarding the trusted online transactions and tracking options. Well, Not anymore! <b> CheapFlightsFirst </b> is one-stop destination for everyone where every traveler can find exciting deals on Domestic flights. With an array of cheap flights offered you don’t have to worry for reservations. You can get the best out of your money and also, bring a smile on the faces of your loved ones.</p>

					<h2 class="font-30">What’s New?</h2>
					<p class="font-14 text-justify"><b>CheapFlightsFirst </b> brings daily exciting offers and deals on different travel products along with the flight tickets. You can look forward for grabbing the great deals and offers on domestic flight tickets with other great travel solutions. You can even look for opportunities to celebrate your holidays like never before and make sure of cherishing the special moments with your special ones.</p>

					<h3>Tips: Find Deals on Domestic Flights </h3>
					<p class="font-14 text-justify">If you are thinking to find deals on domestic flights then you must read the following information:</p>
					<ul>
						<li class="font-14">Make sure you set flight Alerts while you are Browsing flights. After this you will receive a notification if there is a drop in the airfare, you can then know latest deals on domestic flights. </li>
						<li class="font-14">Travelers can score cheap domestic flights through choosing off-peak hours</li>
						<li class="font-14">Travelers can ask to online travel delegates and different booking portals that deliver amazing offers and deals on various flights for affordable journey. </li>
						<li class="font-14">You can subscribe to mailing lists for getting the updates related to sales and discounts.</li>
					</ul>

					<h4>Pick Your Dream Destination</h4>
					<p class="font-14 text-justify">There are endless destinations to discover, you can choose according to your interest and fly high there. If you are thinking how you can get discounts or deals then make sure you look for its best day to book. For example, if you are thinking to explore Miami, make sure you look for its right or cheap day to book your flights. Through <b> CheapFlightsFirst </b> , you can choose your exciting destination and travel there with your loved ones. </p>

					<h5>Little Help Will Guide You To Cross Thousand Miles</h5>
					<p class="font-14 text-justify">Travel advisors present here understand the value of your hard-earned money and that is why they bring to you; top-notch offers and deals for Domestic flights. Just like a cherry on the cake, you are also being offered Last-minute deals too so that your holiday gets better. You are being offered daily discount coupons too on domestic flights as well international flights. You can now fly anywhere and pick your dream destination to fly hassle-free without having any thought of budget or fares with your friends and family.</p>
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