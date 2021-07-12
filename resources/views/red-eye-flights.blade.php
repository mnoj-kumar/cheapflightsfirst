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
					<h1 class="font-30">Red Eye Flights</h1>
					<img src="assets/images/red-eye.jpg" alt="" class="img-fluid mt-2 mb-2">
					<p class="font-14 text-justify">Wondering what is Red Eye Flights? Well, the term ‘red-eye flight’ is pretty common in the travel world but if you are not aware of “Red Eye Flight” then don’t worry we've got the answers you are looking for.</p>

					<h2 class="font-30">What Is Red Flights Eye?</h2>
					<p class="font-14 text-justify">A red-eye flight is a flight that leaves in the evening or around night time and shows up toward the end destination during the day (regularly in the first part of the day). It's the point at which you take a trip when you would normally be sleeping. Travelers who prefer to travel at night prefer this service as it saves the day & when you woke up it’s a whole new place. Nothing is more exciting than waking up in a whole different place & when you take night flights you have got the one. Moreover, most Red Eyes Flights are scheduled around 9 PM.</p>
					<p class="font-14 text-justify">Taking a red-eye flight can save a significant amount on your travel but it can also leave you exhausted upon arrival especially if you are not able to sleep during your flight. You might be wondering why it is called Red Eye Flights? Well, then here it is, everyone is not able to sleep on planes they reach their destination with tired, dry, & Red eyes.</p>

					<h3>The Benefits of Taking Red Eye Flights:</h3>
					<p class="font-14 text-justify">One of the biggest benefits of taking this is you save your entire day & another one is you can take advantage of the hours by sleep that overlaps between time zones. Taking a red-eye flight lets you take advantage of the time by sleeping while you are on route to your destination. You will have enough time to rest & you can make it to your destination by exploring the city without needing to take a midday nap especially when you are on your two-day itinerary. That’s how you can cover most of your trip. The other reason for taking a red-eye flight means you will save a good amount on your travel.</p>
					
					<h4>How to Travel on Red Eye Flight?</h4>
					<p class="font-14 text-justify">What flight should I prefer? Is it better to take a night flight? How to prepare for the one? These are all common questions that come to mind when thinking about travel. Sometimes red-eye flights get a bad rap but with a little planning, you can arrive at your destination feeling refreshed & rested. There are a few things that you need to consider before flying at night. So, if you are taking a night flight then hydrate before you fly as it will help you to arrive at your destination feeling more refreshed. It will be better if you wear comfy clothes it will help you to travel comfortably. If you are more budget savvy & want more comfort then better to reserve a window seat it will give you more room & comfort & if you need to go bathroom frequently then the aisle might be better. Also, it will be better if you create your comfort kit because nothing beats bringing along your upgraded kit with all your favorite stuff. We wish you a good flight experience on your red-eye flight! </p>
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