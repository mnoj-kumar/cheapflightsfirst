@extends('layouts.index', [

    'namePage' => 'home',

    ])

    @section('content')

    <style type="text/css">

        .form-section {

          padding: 8px;

          background-color: #ffffffcf;

          position: relative;

          margin-top: 1.5em;

          border-radius: 6px;

      }

      button.exchange {

          position: absolute;

          top: 10px;

          right: -13px;

          z-index: 1;

          border: 0px;

          background-color: #ee0017;

          color: #ffffff;

          border-radius: 20px;

          cursor: pointer;

      }

      @media (max-width: 425px) {

          button.exchange {

            position: absolute;

            top: 34px;

            right: 0px;

            left: 0px;

            margin: 0 auto;

        }

    }

    span.t-lable {

      position: absolute;

      left: 19px;

      top: 11px;

  }

  span.t-lable2 {

      position: absolute;

      left: 7px;

      top: 11px;

  }

  span.t-lable3 {

      position: absolute;

      right: 20px;

      top: 11px;

      font-size: 19px;

  }

  span.t-lable4 {

      position: absolute;

      right: 9px;

      top: 11px;

      font-size: 19px;

  }

  span.t-lable5 {

      position: absolute;

      left: 9px;

      top: 11px;

  }

  @media (max-width: 425px) {

      span.t-lable2 {

        left: 19px;

    }

    span.t-lable5 {

      left: 4px;

  }

  span.t-lable4 {

      right: 19px;

  }

}

.hidden{

  display: none;



}

.addWidth{

  width: 300px;

}

section.banner-section {

  padding: 50px 0px;

  background-color: #ffffff;

  background-size: cover;

  background-repeat: no-repeat;

  background-position: center;

  position: relative;

  min-height: 400px;

}



.black-overlay {

  background-color: #0000001f;

  height: 100%;

  width: 100%;

  position: absolute;

  top: 0px;

  left: 0px;

}



/*-----/banner-section-----*/



section.section-a {

  padding: 50px 0px;

  background-color: #ffffff;

}



.s-icons {

  border: 1px solid #eeeeee;

  width: 95px;

  height: 95px;

  text-align: center;

  padding-top: 2px;

  border-radius: 4px;

  margin: 0 auto;

  margin-bottom: 1em;

  background-color: #ffffff;

  box-shadow: 0px 0px 10px #00000012;

}



/*-----/section.section-a-----*/

section.section-b {

  padding: 50px 0px;

  background-color: #f8fafc;

}



.trip-card {

  padding: 5px;

  border: 1px solid #eee;

  border-radius: 4px;

  box-shadow: 0px 0px 15px #0000001c;

  background-color: #ffffff;

  margin-bottom: 15px;

}



.air-brand {

  border: 1px solid #eee;

  padding: 5px;

  border-radius: 4px;

  overflow: hidden;

}



.price {

  float: right;

  background-color: #ffffff;

  border: 1px solid #eeeeee;

  padding: 7px 15px;

  font-weight: 600;

  font-size: 17px;

  color: #ee0017;

  border-radius: 4px;

}



.card-footers {

  background-color: #ee0017;

  padding: 10px;

  border-radius: 4px;

  margin-top: 10px;

}



.t-img {

  border-radius: 4px;

}



.air-brand img {

  height: 30px;

}



/*-----/section.section-b-----*/

section.section-c {

  padding: 50px 0px;

  background-color: #ffffff;

}



/*-----/section.section-c-----*/

section.section-d {

  padding: 50px 0px;

  background-color: #f8fafc;

}



.turist-box {

  background-color: #ffffff;

  text-align: center;

  padding: 20px 15px;

  margin: 10px;

  box-shadow: 0px 0px 8px #dcdddd;

  position: relative;

  border: 2px solid #ffffff;

  border-radius: 10px;

  background-size: cover;

  background-position: center;

  min-height: 400px;

  position: relative;

}



.turist-box:hover {

  box-shadow: 0px 0px 11px #007aee;

}



.owl-nav {

  display: none !important;

}



.batch {

  font-family: sans-serif;

  position: absolute;

  left: -1px;

  background-color: #ee0017;

  color: #ffffff;

  padding: 8px 25px;

  font-size: 18px;

  font-weight: 600;

  border: 1px solid #fff;

  border-top-right-radius: 22px;

  border-bottom-right-radius: 22px;

  display: inline-block;

}



/*--------/section-d-------*/



section.section-subscribe {

  background-color: #ee0017;

  padding: 30px 0px;

}

.nd strong {

    display: block

}

.nd small {

    display: block

}

.nd1 strong {

    display: block

}

.nd1 small {

    display: block

}

select.form-control.form-control-lg {

    padding: 1rem 1rem .8rem !important;

    height: 50px;

}

.airport-list {

    padding: 0px;

    margin: 0px;

}

.airport-list li {

    padding: 5px 10px;

    line-height: 1;

}

</style>

<form method="get" action="{{ route('searchnew') }}" autocomplete="off">

 

    <section class="banner-section" style="background-image: url(assets/images/home-banner.jpg);">

        <div class="black-overlay"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-2 col-6">

                  <div class="custom-control custom-radio">

                    <input type="radio" id="customRadio1" name="is_return" value="1" class="custom-control-input" checked="radio">

                    <label class="custom-control-label font-13 text-white" for="customRadio1">Round Trip</label>

                </div>

            </div>

            <div class="col-md-2 col-6">

              <div class="custom-control custom-radio">

                <input type="radio" id="customRadio2" name="is_return"  value="0" class="custom-control-input">

                <label class="custom-control-label font-13 text-white" for="customRadio2">One Way</label>

            </div>

        </div>

    </div><!--/row-->



    <div class="form-section">

        <div class="row">

          <div class="col-12 col-md-10 pr-md-1 mb-md-0 mb-2">

            <div class="row">

              <div class="col-12 col-md-5 pr-md-1 mb-md-0 mb-2">

                <div class="row">

                  <div class="col-md-6 col-12 pr-md-1 position-relative">

                    <!-- <label class="text-white d-none d-md-block">From</label> -->

                    <span class="t-lable"><i class="fa fa-map-marker fa-lg red-color"></i></span>

                    <input class="form-control custom-form" required="required" id="origin" type="text" placeholder="Enter City / Airport code ">



<label id="origin-error" class="error" for="origin" style="display: none;"></label>

<input type="hidden" name="origin" id="origin_hidden" >

<!-- <span class="xs_back"><img src="assets/images/back_arow.svg" style="width: 16px;"></span>

<span class="icon-img lft"><img src="assets/images/location_icon.png" alt="location_icon"></span> -->

<img src="assets/images/makeusfly-loading.gif"  alt="loader" class="search_loader" style="display: none;">





                    <button class="exchange d-block d-md-none" onclick="exchange()"><i class="fa fa-exchange"></i></button>

                </div>

                <div class="col-md-6 col-12 pl-md-1 position-relative">

                    <span class="t-lable2"><i class="fa fa-map-marker fa-lg red-color"></i></span>

                    <input class="form-control custom-form"  required="required"  id="destination" type="text" placeholder="Enter City / Airport code ">



  <label id="destination-error" class="error" for="destination" style="display: none;"></label>

  <input type="hidden" name="destination" id="destination_hidden" >

<!--   <span class="xs_back2"><img src="assets/images/back_arow.svg" style="width: 16px;"></span> 

  <span class="icon-img"><img src="assets/images/location_icon.png" alt="location_icon"></span> -->

  <img src="assets/images/makeusfly-loading.gif" alt="loading" class="search_loader toloader" style="display: none;">



                </div>

            </div><!--/row-->

        </div>

        <div class="col-12 col-md-4 pl-md-1 pr-md-1 mb-md-0 mb-2">

            <div class="row">

              <div class="col-md-6 col-6 pr-md-1 pr-0 position-relative">

                <span class="t-lable"><i class="fa fa-calendar red-color"></i></span>

                <input class="form-control custom-form date" name="departureDate"data-date-range-end="#depart_form" placeholder="yyyy-mm-dd" autocomplete="off" readonly="" placeholder="Depart date" id="depart_form">

            </div>

            <div class="col-md-6 col-6 pl-md-1 pl-0 position-relative" id="return_form">

                <span class="t-lable5"><i class="fa fa-calendar red-color"></i></span>

                <input class="form-control custom-form date"  id="return_form1" name="returnDate" data-date-range-end="#return_form1" placeholder="yyyy-mm-dd" autocomplete="off" readonly="" placeholder="Return date" id="">

            </div>

        </div><!--/row-->

    </div>

    <div class="col-12 col-md-3 pl-md-1">

        <div class="row">

          <div class="col-md-6 col-12 pr-md-1 mb-md-0 mb-2 position-relative">

            <span class="t-lable4"><i class="fa fa-caret-down red-color"></i></span>

            <select class="form-control custom-form select" name="passenger">

              <option value="1">Passenger</option>

              <option value="1">1</option>

              <option value="2">2</option>

              <option value="3">3</option>

              <option value="4">4</option>

          </select>

      </div>

      <div class="col-md-6 col-12 pl-md-1 position-relative">

        <span class="t-lable3"><i class="fa fa-caret-down red-color"></i></span>

        <select class="form-control custom-form select" name="class">

          <option value="ECONOMY">Classes</option>

          <option value="ECONOMY">Economy</option>

          <option value="BUSINESS">Business</option>

          <option value="FIRST">First</option>

      </select>

  </div>

</div><!--/row-->

</div>

</div><!--/row-->

</div><!--/col-12 col-md-10-->



<div class="col-12 col-md-2 pl-md-1">

    <button type="submit" type="button" class="btn red-bg btn-lg btn-block text-white">Search</button>

</div><!--/col-12 col-md-2-->

</div><!--/row-->



</div><!--/form-section-->

</form>

<div class="row mt-3">

    <div class="col-md-12 col-12">

      <label class="parent-checkbox text-white">My Dates are flexible (+ -) days

        <input type="checkbox">

        <span class="checkmark"></span>

    </label>

</div>

</div><!--/row-->



</div>

<!--/container-->

</section>

<section class="section-a">

    <div class="container">

      <div class="row">

        <div class="col-md-9 col-12">

          <div class="row">

            <div class="col-6 col-md-3">

              <div class="service-box text-center">

                <div class="s-icons">

                  <img src="assets/images/air-fare.png" alt="">

              </div>

              <p class="mb-md-0 mb-2">Exclusive AirFare Contracts and insider Consolidator Deals</p>

          </div>

      </div>

      <div class="col-6 col-md-3">

          <div class="service-box text-center">

            <div class="s-icons">

              <img src="assets/images/easy-secure.png" alt="">

          </div>

          <p class="mb-md-0 mb-2">Fast, Easy & Secure Reservations</p>

      </div>

  </div>

  <div class="col-6 col-md-3">

      <div class="service-box text-center">

        <div class="s-icons">

          <img src="assets/images/ticket-protection.png" alt="">

      </div>

      <p class="mb-md-0 mb-2">Ticket Protection for Your Peace of Mind with Worldwide Coverage.</p>

  </div>

</div>

<div class="col-6 col-md-3">

  <div class="service-box text-center">

    <div class="s-icons">

      <img src="assets/images/support.png" alt="">

  </div>

  <p class="mb-md-0 mb-2">24/7/365 Excellent Service Provided by 850 Live Travel Agents</p>

</div>

</div>

</div>

<!--/row-->

</div>

<div class="col-md-3 col-12">

  <div class="service-box text-center">

    <div class="s-icons">

      <img src="assets/images/save-time.png" alt="">

  </div>

  <p class="mb-md-0 mb-2">Concierge Service Helps to Save Time, Money and simplify Flight</p>

</div>

</div>

</div>

<!--/row-->

</div>

<!--/container-->

</section>

<!--/section-a-->



<section class="section-b">

    <div class="container">

      <div class="row">

        <div class="col-md-4 col-12">

          <div class="trip-card">

            <a href="#">

              <img src="assets/images/Australia.jpg" class="img-fluid t-img" alt="">

              <div class="row mt-2">

                <div class="col-4">

                  <div class="air-brand">

                    <img src="assets/images/alaksa.png" class="img-fluid" alt="">

                </div>

            </div>

            <div class="col-8">

              <div class="price">

                $516.99

            </div>

        </div>

    </div>

    <!--/row-->

    <div class="card-footers">

        <div class="row">

          <div class="col-6">

            <p class="mb-0 text-white"><b>Madrid</b></p>

            <p class="mb-0 text-white font-12">From San Francisco</p>

        </div>

        <div class="col-6 text-right">

            <p class="mb-0 text-white"><b>Roundtrip</b></p>

            <p class="mb-0 text-white font-12">Feb 27 to Mar 06</p>

        </div>

    </div>

    <!--/row-->

</div>

</a>

</div>

<!--/trip-card-->

</div>

<!--/col-md-4 col-12-->



<div class="col-md-4 col-12">

  <div class="trip-card">

    <a href="#">

      <img src="assets/images/Chicago.jpg" class="img-fluid t-img" alt="">

      <div class="row mt-2">

        <div class="col-4">

          <div class="air-brand">

            <img src="assets/images/alaksa.png" class="img-fluid" alt="">

        </div>

    </div>

    <div class="col-8">

      <div class="price">

        $516.99

    </div>

</div>

</div>

<!--/row-->

<div class="card-footers">

    <div class="row">

      <div class="col-6">

        <p class="mb-0 text-white"><b>Madrid</b></p>

        <p class="mb-0 text-white font-12">From San Francisco</p>

    </div>

    <div class="col-6 text-right">

        <p class="mb-0 text-white"><b>Roundtrip</b></p>

        <p class="mb-0 text-white font-12">Feb 27 to Mar 06</p>

    </div>

</div>

<!--/row-->

</div>

</a>

</div>

<!--/trip-card-->

</div>

<!--/col-md-4 col-12-->



<div class="col-md-4 col-12">

  <div class="trip-card">

    <a href="#">

      <img src="assets/images/Cuba.jpg" class="img-fluid t-img" alt="">

      <div class="row mt-2">

        <div class="col-4">

          <div class="air-brand">

            <img src="assets/images/alaksa.png" class="img-fluid" alt="">

        </div>

    </div>

    <div class="col-8">

      <div class="price">

        $516.99

    </div>

</div>

</div>

<!--/row-->

<div class="card-footers">

    <div class="row">

      <div class="col-6">

        <p class="mb-0 text-white"><b>Madrid</b></p>

        <p class="mb-0 text-white font-12">From San Francisco</p>

    </div>

    <div class="col-6 text-right">

        <p class="mb-0 text-white"><b>Roundtrip</b></p>

        <p class="mb-0 text-white font-12">Feb 27 to Mar 06</p>

    </div>

</div>

<!--/row-->

</div>

</a>

</div>

<!--/trip-card-->

</div>

<!--/col-md-4 col-12-->



<div class="col-md-4 col-12">

  <div class="trip-card">

    <a href="#">

      <img src="assets/images/Nashville.jpg" class="img-fluid t-img" alt="">

      <div class="row mt-2">

        <div class="col-4">

          <div class="air-brand">

            <img src="assets/images/alaksa.png" class="img-fluid" alt="">

        </div>

    </div>

    <div class="col-8">

      <div class="price">

        $516.99

    </div>

</div>

</div>

<!--/row-->

<div class="card-footers">

    <div class="row">

      <div class="col-6">

        <p class="mb-0 text-white"><b>Madrid</b></p>

        <p class="mb-0 text-white font-12">From San Francisco</p>

    </div>

    <div class="col-6 text-right">

        <p class="mb-0 text-white"><b>Roundtrip</b></p>

        <p class="mb-0 text-white font-12">Feb 27 to Mar 06</p>

    </div>

</div>

<!--/row-->

</div>

</a>

</div>

<!--/trip-card-->

</div>

<!--/col-md-4 col-12-->



<div class="col-md-4 col-12">

  <div class="trip-card">

    <a href="#">

      <img src="assets/images/San-Diego.jpg" class="img-fluid t-img" alt="">

      <div class="row mt-2">

        <div class="col-4">

          <div class="air-brand">

            <img src="assets/images/alaksa.png" class="img-fluid" alt="">

        </div>

    </div>

    <div class="col-8">

      <div class="price">

        $516.99

    </div>

</div>

</div>

<!--/row-->

<div class="card-footers">

    <div class="row">

      <div class="col-6">

        <p class="mb-0 text-white"><b>Madrid</b></p>

        <p class="mb-0 text-white font-12">From San Francisco</p>

    </div>

    <div class="col-6 text-right">

        <p class="mb-0 text-white"><b>Roundtrip</b></p>

        <p class="mb-0 text-white font-12">Feb 27 to Mar 06</p>

    </div>

</div>

<!--/row-->

</div>

</a>

</div>

<!--/trip-card-->

</div>

<!--/col-md-4 col-12-->



<div class="col-md-4 col-12">

  <div class="trip-card">

    <a href="#">

      <img src="assets/images/Tokyo.jpg" class="img-fluid t-img" alt="">

      <div class="row mt-2">

        <div class="col-4">

          <div class="air-brand">

            <img src="assets/images/alaksa.png" class="img-fluid" alt="">

        </div>

    </div>

    <div class="col-8">

      <div class="price">

        $516.99

    </div>

</div>

</div>

<!--/row-->

<div class="card-footers">

    <div class="row">

      <div class="col-6">

        <p class="mb-0 text-white"><b>Madrid</b></p>

        <p class="mb-0 text-white font-12">From San Francisco</p>

    </div>

    <div class="col-6 text-right">

        <p class="mb-0 text-white"><b>Roundtrip</b></p>

        <p class="mb-0 text-white font-12">Feb 27 to Mar 06</p>

    </div>

</div>

<!--/row-->

</div>

</a>

</div>

<!--/trip-card-->

</div>

<!--/col-md-4 col-12-->



</div>

<!--/row-->

</div>

<!--/container-->

</section>

<!--/section-b-->



<section class="section-c">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <h1>Cheap Flight Desk</h1>

          <h2>Cheap Flight Desk- A Platform For Cheaper Booking Experience So You Can Explore The World!!!</h2>

          <p class="font-13">Flight booking can be an expensive affair especially when you don’t have the right travel partner to book your air tickets. But not anymore, Cheap Flight Desk offers you Secure Booking choices with the Biggest Discounts for your next travel booking. So, enjoy your vacation with us by exploring every corner of the world because <strong>we are flying worldwide.</strong></p>

          <p class="font-13">Every day thousands of people book their flight tickets through our websites. Cheap Flights Desk makes travel dreams come true for everybody. If you have an upcoming travel plan, then you can access the most recent offers from our site. The cheap Flight Desk is the right place where you will get last-minute tickets at a good price.<strong>Explore all travel deals in one go! So, Your Vacation Get Running with Cheap Flight Desk!!</strong></p>

          <p class="font-13">The user-friendly interface makes Cheap Flight Desk a hassle-free booking platform. Where individuals can complete their booking with quick payments. Moreover, it is very easy to book your air tickets with the Cheap Flight Desk, when you open the sites then on your search you will get a list of available flights that will match your preference & dates. After check-out, the details & entering other personal information, feel free to book your flight with great discounts. Regardless of whether you are searching for a last-minute flight deal or cheap flight tickets for upcoming travel plans, you will find the best offers here. </p>

          <p class="font-13">You will enjoy a peaceful experience while booking your domestic & international flights. Cheap Flights Desk is a reliable booking site that offers exclusive discounts on your flight booking. Also, Cheap Flight Desk is focused on making travel simple and has been designed to give you a cheapest flight booking with a couple of clicks. Here you can book your flight for every destination at the lowest price possible. Also, the team is active 24/7 so you can call anytime for any of your travel queries. Our round the clock customer support ensures that your queries will be solved effectively.</p>

          <p class="font-13">Enjoy great savings on your travel with our website. The simplicity of booking trips with the best budget choices and Customer Care makes it more favorable. Also, the latest booking updates will provide you on-the-go experience whenever you are ready for it. To get the real-time updates to sign up for our newsletter, where you will get more lively discounts with other offers. So, get informed about the most recent coupons and offers through our website that helps you plan an outing anytime you wish. </p>

          <p class="font-13">If you want to book your tickets at no convenience fee then Cheap Flight Desk is the right place for you, here you will get the most ideal offers. Also, last minutes discounts are easily accessible. Find exclusive deals & exclusive services here only. </p>

          <p class="font-13"><strong>Unforgettable Trips Start With Cheap Flight Desk. Find Adventure Nearby By Enjoying Great Booking Services Because Your Dream Destination Is Just A Click Away!</strong></p>

      </div>

  </div>

  <!--/row-->

</div>

<!--/container-->

</section>

<!--/section-c-->





<section class="section-d">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-12 text-center mb-4">

          <h2>Travel By Theme</h2>

      </div>

      <div class="col-md-12">

          <div class="owl-carousel owl-theme">

            <div class="item">

              <a href="#">

                <div class="turist-box" style="background-image: url(assets/images/family.jpg);">

                  <div class="batch">Family</div>

              </div>

          </a>

      </div>

      <div class="item">

          <a href="#">

            <div class="turist-box" style="background-image: url(assets/images/friends.jpg);">

              <div class="batch">Friends</div>

          </div>

      </a>

  </div>

  <div class="item">

      <a href="#">

        <div class="turist-box" style="background-image: url(assets/images/Couples.jpg);">

          <div class="batch">Couples</div>

      </div>

  </a>

</div>

<div class="item">

  <a href="#">

    <div class="turist-box" style="background-image: url(assets/images/Weekends.jpg);">

      <div class="batch">Weekends</div>

  </div>

</a>

</div>

<div class="item">

  <a href="#">

    <div class="turist-box" style="background-image: url(assets/images/i-holidays.jpg);">

      <div class="batch">International Holidays</div>

  </div>

</a>

</div>



</div>

<!--/owl-carousel-->

</div>

</div>

<!--/row-->

</div>

<!--/container-->

</section>

<!--/section-d-->





<section class="section-subscribe">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-6 border-right mb-md-0 mb-3">

          <h4 class="text-white mb-3"><i class="fa fa-paper-plane fa-lg text-white"></i> <b>SUBSCRIBE FOR NEW OFFERS</b></h4>

          <div class="input-group">

            <input type="text" class="form-control form-control-lg border-0" placeholder="Enter Your Email Address">

            <div class="input-group-append">

              <button class="btn btn-light btn-lg" type="button" id="button-addon2">SUBMIT</button>

          </div>

      </div>

  </div>

  <div class="col-md-6 col-12 mb-3">

      <h4 class="text-white">CALL US NOW FOR ALL UNPUBLISHED FARES</h4>

      <h3 class="text-white"><i class="fa fa-mobile fa-lg text-white"> +1-000-000-0000</i></h3>

  </div>

</div>

<!--/row-->

</div>

<!--/container-->

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function () {

           $('input[type=radio][name=is_return]').on('change', function() {

            switch ($(this).val()) {

              case '1':

              $('#return_form').removeClass('hidden')

              $("#depart_form").removeClass("addWidth");

              $('#return_form1').prop('required',true);

              break;

              case '0':

              $('#return_form').addClass('hidden');

              $("#depart_form").addClass("addWidth");

              $('#return_form1').removeAttr('required');

              break;

          }

      });

   });



  //   $(document).on('click', '.nd', function () {

  //       // alert($(this).text());

  //       $('#origin').val($(this).text());

  //       $('#countryList').fadeOut();

  //   });



  // $(document).on('click', '.nd1', function () {

  //     // alert($(this).text());

  //     $('#dst').val($(this).text());

  //     $('#countryList1').fadeOut();

  // });



  function exchange() {

      var value1 = $('#origin').val();

      var value2 = $('#destination').val();

      $('#origin').val(value2);

      $('#destination').val(value1);

  }



</script>

@endsection