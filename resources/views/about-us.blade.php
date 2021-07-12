@extends('layouts.index', [

	'namePage' => 'home',

	])

	@section('content')


  <section class="banner-section" style="background-image: url(assets/images/home-banner.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h1 class="text-white">About Us</h1>
        </div>
      </div>
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-12 mb-md-0 mb-3">
          <img src="assets/images/about-img.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 col-12">
          <p class="text-justify">Cheap Flight First is a company with a motive to encourage all the travelers all around the globe to explore different places and book flights and hotels under their budget. We are a team of members working in order to find and bring out the best of flights and hotels in front of you so that you can get them at affordable charges. </p>
          <p class="text-justify">CheapFlighsFirst is just a steady platform to make your travel search easy and flawless and to provide access to the world-class technology that travel diligence has to bid. We provide you an ocean full of information and options for your hotel or flight bookings. To enjoy your vacation and serenity and beauty of the globe you will have to leave back the pressure of airfares or hotel charges, that is the time when we come in picture. </p>
        </div>
        <div class="col-md-12 col-12 mt-3">
          <p>CheapFlightsFirst is a website for all the travelers like you. We always tend to focus our lenses to craft our website as constructive in order to weave a customized or personalized vacation plan that will suit your soul and pocket both. Our state-of-the-art technology and assistance that is available 24x7 leaves no coins unturned to curate a magnificent travel for you.  We got everything you need covered irrespective of your preferred location. </p>
          <p>To enquire or connect with our staff mail us to info@cheapflightsfirst.com or call us at +1-833-930-1616</p>
          <p class="mb-0">Book NOW & Save BIG !!!</p>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/about-section-->

@endsection