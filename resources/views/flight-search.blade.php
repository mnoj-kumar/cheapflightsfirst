@extends('layouts.index', [
'namePage' => 'home',
])
@section('content')
<style type="text/css">
  .form-section {
   padding: 15px;
   background-color: #ffffff;
   box-shadow: 0px 0px 15px #00000063;
   position: relative;
   margin-top: 1.5em;
   border-radius: 4px;
   }
   input#myRange {
    width: 100%;
   }
   .custom-form {
   font-size: 13px !important;
   height: 50px !important;
   font-weight: normal;
   padding: 10px 20px !important;
   border-radius: 0 !important;
   background-color: #fff0 !important;
   border: 0px !important;
   border-bottom: 2px solid #dbdee1 !important;
   }
   .custom-form:focus{
   border-color: #ee0017 !important;
   outline: 0 !important;
   box-shadow: 0 0 0 0.2rem #007bff00;
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
   span.mc {
   position: absolute;
   left: 15px;
   top: 14px;
   }
   span.caret {
   position: absolute;
   right: 16px;
   top: 6px;
   font-size: 26px;
   }
   @media (max-width: 425px) {
   }
   .hidden{
   display: none;
   }
  span.t-lable {
   position: absolute;
   font-size: 12px;
   left: 8px;
   top: -2px;
   }
   .passenger-box {
   position: absolute;
   background-color: rgb(255 255 255);
   padding: 10px;
   z-index: 4;
   box-shadow: 0px 5px 5px #0000001f;
   } 

   /*.addWidth{
   width: 300px;
   }*/
   section.banner-section{
   padding: 30px 0px;
   background-color: #ffffff;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
   position: relative;
   min-height:200px;
   }
   .black-overlay {
   background-color: #006fa4c4;
   height: 100%;
   width: 100%;
   position: absolute;
   top: 0px;
   left: 0px;
   }
   /*--------/banner-section----------*/
   section.search-section-a {
   padding: 40px 0px;
   background-color: #f8fbfc;
   }
   .search-flights-box {
   border-right: 2px solid #ff5969 !important;
   background-color: #ffffff;
   box-shadow: 0px 0px 10px #00000014;
   border: 1px solid #dfdfdf;
   margin-bottom: 1em;
   }
   .search-flights-box:hover {
   box-shadow: 0px 0px 10px #bad8f8;
   }
   .b-solid {
   border-bottom: 1px solid #ccc;
   margin-top: 12px;
   margin-bottom: 12px;
   }
   .b-dashed {
   border-bottom: 1px dashed #ccc;
   margin-top: 12px;
   margin-bottom: 12px;
   }
   .air-logo {
   height: 50px;
   width: 80px;
   }
   @media (max-width: 320px) {
   .air-logo {
   display: none;
   }
   }
   .tech-support {
   background-color: #fff;
   margin-bottom: 15px;
   padding: 15px 10px;
   border: 1px solid #ff5969;
   box-shadow: 0px 0px 15px #00000029;
   }
   .side-box{
   padding: 10px;
   background-color: #ffffff;
   box-shadow: 0px 0px 5px #0000001a;
   border-top: 2px solid #ee0017;
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
<form method="get" action="{{ route('search') }}" autocomplete="off">
   {{ csrf_field() }}
   <section class="banner-section" style="background-image: url(assets/images/home-banner.jpg);">
      <div class="black-overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-2 col-6">
               <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="is_return" value="1" class="custom-control-input" {{$customRadio==1?'checked="checked"':''}}  >
                  <label class="custom-control-label font-13 text-white" for="customRadio1">Round Trip</label>
               </div>
            </div>
            <div class="col-md-2 col-6">
               <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio2" name="is_return"  value="0" class="custom-control-input" {{$customRadio==0?'checked="checked"':''}}>
                  <label class="custom-control-label font-13 text-white" for="customRadio2">One Way</label>
               </div>
            </div>
         </div>
         <!--/row-->

         <div class="form-section">
            <div class="row">
               <div class="col-12 col-md-12 mb-md-0 mb-2">
                  <div class="row">
                     <div class="col-12 col-md-6 mb-md-0 mb-2">
                        <div class="row">
                           <div class="col-md-6 col-12 mb-2 position-relative">
                              <!-- <label class="text-white d-none d-md-block">From</label> -->
                              <span class="mc"><i class="fa fa-map-marker fa-lg red-color"></i></span>
                              <input class="form-control custom-form" required="required" id="origin" type="text" placeholder="Enter City / Airport code ">
                              <label id="origin-error" class="error" for="origin" style="display: none;"></label>
                              <input type="hidden" name="origin" id="origin_hidden" >
                              <!-- <span class="xs_back"><img src="assets/images/back_arow.svg" style="width: 16px;"></span>
                                 <span class="icon-img lft"><img src="assets/images/location_icon.png" alt="location_icon"></span> -->
                              <img src="assets/images/makeusfly-loading.gif"  alt="loader" class="search_loader" style="display: none;">
                              <button class="exchange d-block d-md-none" onclick="exchange()"><i class="fa fa-exchange"></i></button>
                           </div>
                           <div class="col-md-6 col-12 mb-2 position-relative">
                              <span class="mc"><i class="fa fa-map-marker fa-lg red-color"></i></span>
                              <input class="form-control custom-form"  required="required"  id="destination" type="text" placeholder="Enter City / Airport code ">
                              <label id="destination-error" class="error" for="destination" style="display: none;"></label>
                              <input type="hidden" name="destination" id="destination_hidden" >
                              <!--     <span class="xs_back2"><img src="assets/images/back_arow.svg" style="width: 16px;"></span> 
                                 <span class="icon-img"><img src="assets/images/location_icon.png" alt="location_icon"></span> -->
                              <img src="assets/images/makeusfly-loading.gif" alt="loading" class="search_loader toloader" style="display: none;">
                           </div>
                        </div>
                        <!--/row-->
                     </div>
                     <div class="col-12 col-md-6 mb-md-0 mb-2">
                        <div class="row">
                           <div class="col mb-2 position-relative">
                              <span class="mc"><i class="fa fa-calendar red-color"></i></span>
                              <input class="form-control custom-form date" name="departureDate"data-date-range-end="#depart_form" placeholder="yyyy-mm-dd" autocomplete="off" readonly="" placeholder="Depart date" id="depart_form">
                           </div>
                           <div class="col mb-2 position-relative" id="return_form">
                              <span class="mc"><i class="fa fa-calendar red-color"></i></span>
                              <input class="form-control custom-form date"  id="return_form1" name="returnDate" data-date-range-end="#return_form1" placeholder="yyyy-mm-dd" autocomplete="off" readonly="" placeholder="Return date" id="">
                           </div>
                        </div>
                        <!--/row-->
                     </div>
                     <div class="col-12 col-md-6 mb-2">
                        <div class="row">
                           <div class="col-md-6 col-12 mb-md-0 mb-2 position-relative">
                              <span class="mc"><i class="fa fa-user red-color"></i></span>
                              <span class="caret"><i class="fa fa-caret-down red-color"></i></span>
                              <span class="t-lable ml-md-2">Passenger</span>
                              <input class="form-control custom-form rounded-0" value="{{$passenger}}" type="text" name="passenger" id="passenger" autocomplete="off" required>
                              <div class="passenger-box" id="passengerBox">
                                 <div class="row p-2">
                                    <div class="col-7">
                                       <p class="font-12 mt-0 mb-0"><strong>Adult</strong></p>
                                    </div>
                                    <div class="col-5 text-right">
                                       <input class="form-control custom_form rounded-0 border-0" type="text" value="{{$noofadults}}" id="noofadults" name="adult" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                                       <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer red-color" id="minusAdults" onclick="decreaseAdultsValue()"></i><span class="mr-2 ml-2 font-12 bold" id="adultsValue"></span><i class="fa fa-plus-circle pointer red-color"  onclick="increaseAdultsValue()" style="margin-left: 25px;"></i></p>
                                    </div>
                                 </div>
                                 <!--/row-->
                                 <div class="border-bottom"></div>
                                 <div class="row p-2">
                                    <div class="col-7 pr-0">
                                       <p class="font-12 mt-0 mb-0"><strong>Children</strong> <span class="text-secondary">(Age 2-14)</span></p>
                                    </div>
                                    <div class="col-5 text-right">
                                       <input class="form-control custom_form rounded-0 border-0" type="text" value="{{$children}}" id="children" name="children" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                                       <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer red-color" id="minusChildren" onclick="decreaseChildrenValue()"></i><span class="mr-2 ml-2 font-12 bold" id="childrenValue"></span><i class="fa fa-plus-circle pointer red-color" onclick="increaseChildrenValue()" style="margin-left: 25px;"></i></p>
                                    </div>
                                 </div>
                                 <!--/row-->
                                 <div class="border-bottom"></div>
                                 <div class="row p-2 mb-1">
                                    <div class="col-7">
                                       <p class="font-12 mt-0 mb-0"><strong>Infants</strong> <span class="text-secondary">(Under 2)</span></p>
                                    </div>
                                    <div class="col-5 text-right">
                                       <input class="form-control custom_form rounded-0 border-0" type="text" value="{{$infants}}" id="infants" name="infants" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                                       <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer red-color" id="minusInfants" onclick="decreaseInfantsValue()"></i><span class="mr-2 ml-2 font-12 bold" id="infantsValue"></span><i class="fa fa-plus-circle pointer red-color" onclick="increaseInfantsValue()" style="margin-left: 25px;"></i></p>
                                    </div>
                                 </div>
                                 <!--/row-->
                                 <div class="row mb-2">
                                    <div class="col-12">
                                       <div class="custom-control custom-radio">
                                          <input type="radio" id="stop" name="nonStop" class="custom-control-input" value="false" name="stop" autocomplete="off">
                                          <label class="custom-control-label font-13" for="stop">Stop</label>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="custom-control custom-radio">
                                          <input type="radio" id="non-stop" name="nonStop" class="custom-control-input" checked="radio" value="true" name="nonStop" autocomplete="off">
                                          <label class="custom-control-label font-13" for="non-stop">Non Stop</label>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/row-->
                                 <p class="red-btn-sm btn-block mb-2" id="done">Done</p>
                              </div>
                              <!--/passenger-box-->
                           </div>
                           <div class="col-md-6 col-12 position-relative">
                              <span class="mc"><i class="fa fa-suitcase red-color"></i></span>
                              <span class="caret"><i class="fa fa-caret-down red-color"></i></span>
                              <select class="form-control custom-form select" name="class">
                                 <option value="ECONOMY" selected="selected">Economy</option>
                                 <option value="BUSINESS">Business</option>
                                 <option value="FIRST">First</option>
                              </select>
                           </div>
                        </div>
                        <!--/row-->
                     </div>
                     <div class="col-12 col-md-3 mb-2">
                        <label class="parent-checkbox mt-4">My Dates are flexible (+ -) days
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                     </div>
                     <div class="col-12 col-md-3 mb-2">
                        <button type="submit" type="button" class="btn red-bg btn-lg btn-block rounded-0 text-white mt-1">Search</button>
                     </div>
                  </div>
                  <!--/row-->
               </div>
               <!--/col-12 col-md-112-->
            </div>
            <!--/row-->
         </div>
         <!--/form-section-->


      </div>
   </section>
</form>
<section class="search-section-a">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-12 mb-3">
            <div class="side-box mb-2">
               <p class="mb-0"><strong>Get Most Updated Low Airfare</strong></p>
               <div class="row">
                  <div class="col-4">
                     <p class="mb-0"><small>{{$origin}}</small></p>
                  </div>
                  <div class="col-4 text-center"><i class="fa fa-plane red-color mt-2"></i></div>
                  <div class="col-4 text-right">
                     <p class="mb-0"><small>{{$dst}}</small></p>
                  </div>
               </div>
               <!--/row-->
            </div>
            <!--/side-box-->
            <div class="side-box mb-2">
               <p class="mb-2"><strong>Filter by Price</strong></p>
               <form name="FinalAccept" method="get" action="">
                  <input type="hidden" name="origin" value="{{$origin}}">
                  <input type="hidden" name="destination" value="{{$dst}}">
                  <input type="hidden" name="departureDate" value="{{$departureDate}}">
                  <input type="hidden" name="returnDate" value="{{$returnDate}}">
                  <input type="hidden" name="passenger" value="{{$passenger}}">
                  <input type="hidden" name="adult" value="{{$noofadults}}">
                  <input type="hidden" name="children" value="{{$children}}">
                  <input type="hidden" name="infants" value="{{$infants}}">
                  <input type="hidden" name="class" value="{{$class}}">
                  <input type="hidden" name="nonStop" value="{{$nonStop}}">
               
              	  <div class="row">
                    <div class="col-12">  
                        <label> $0 - $<span id="price_show">{{$maxprice}}</span></label>
                    	<br>
                        <input type="range" class="form-range" min="0" max="10000" id="myRange" value="{{$maxprice}}" name="maxprice" onclick="this.form.submit()" >
                    </div>
               	  </div>
              </form>
               <!--/row-->	                     
            </div>
            <!--/side-box-->
            <div class="side-box mb-2">
               <p class="mb-2"><strong>Flight</strong></p>
               <p class="font-13 mb-0"><b>Depart from </b> {{ $origin }}</p>
               <p class="font-13 mb-0"><b>Arrival at </b> {{ $dst }}</p>
            </div>
            <!--/side-box-->
            <div class="side-box mb-2">
               <p><strong>Alternate Date</strong></p>
               <label class="parent-checkbox font-13"> Show fares with alternate date
               <input type="checkbox">
               <span class="checkmark"></span>
               </label>
               <label class="parent-checkbox font-13"> Show fares with actual date
               <input type="checkbox">
               <span class="checkmark"></span>
               </label>
               <div class="b-solid"></div>
               <!--<p class="font-13 mb-1"><strong>Departure From</strong></p>
                  <div class="row">
                  
                  	<div class="col-6">
                  
                  		<label class="parent-checkbox"> Patna
                  
                  			<input type="checkbox">
                  
                  			<span class="checkmark"></span>
                  
                  		</label>
                  
                  	</div>
                  
                  	<div class="col-6 text-right">
                  
                  		<p class="mb-0">$122.09</p>
                  
                  	</div>
                  
                  </div>
                  
                  <p class="font-13 mb-1"><strong>Arriving At</strong></p>
                  
                  <div class="row">
                  
                  	<div class="col-6">
                  
                  		<label class="parent-checkbox"> New Delhi
                  
                  			<input type="checkbox">
                  
                  			<span class="checkmark"></span>
                  
                  		</label>
                  
                  	</div>
                  
                  	<!--<div class="col-6 text-right">
                  
                  		<p class="mb-0">$122.09</p>
                  
                  	</div>
                  
                  </div><!--/row-->
               <div class="b-solid"></div>
               <!--	<p class="font-13 mb-1"><strong>Airlines</strong></p>
                  @foreach($res as $data) 
                  								<div class="row mb-1">
                  									<div class="col-6">
                  										<label class="parent-checkbox"> {{ $data['route']['0']['airlines']}}
                  										<input type="checkbox">
                  											<span class="checkmark"></span>
                  										</label>
                  									</div>
                  									<div class="col-6 text-right">
                  										<p class="mb-0">$122.09</p>
                  									</div>
                  								</div>
                  @endforeach
                  								-->
            </div>
            <!--/side-box-->
         </div>
         <!--/col-md-3 col-12-->
         <div class="col-md-9 col-12">
            <div class="row">
               <div class="col-12 col-md-12">
                  <h3 class="red-color mb-0">{{$origin}} to {{$dst}} </h3>
                  <p class="mb-1"><small><b>{{date('F j, Y',strtotime($departureDate))}} @if(!empty($returnDate)) {{'-'}} {{ date('F j, Y',strtotime($returnDate))}}@endif</b></small></p>
                  <p><small>Prices are <b> {{$customRadio==1?'ROUND TRIP':'SINGLE TRIP '}}</b> per person, include all taxes and fees, but do not include baggage fees</small></p>
               </div>
            </div>
            <!--/row-->
            <div class="tech-support">
               <div class="row">
                  <div class="col-4 col-md-1">
                     <img src="assets/images/support.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-8 col-md-6">
                     <h5 class="mb-0">Lower Phone Only Fares May Be</h5>
                     <p class="mb-0"><strong>Available - Call Now!</strong></p>
                  </div>
                  <div class="col-12 col-md-5 text-md-right">
                     <button class="red-btn-lg btn-block"><i class="fa fa-volume-control-phone"></i> +1 (833) 930-1616</button>
                  </div>
               </div>
            </div>
            @if(!empty($res))
            @foreach($res as $value)
           
           	@if($value['price'] < $maxprice)
                                            
            <div class="search-flights-box p-md-3 p-2">
               <div class="row">
                  <div class="col-12 col-md-6 mb-3 mb-md-0">
                     <h5 class="mb-0"><b class="blue-color">{{$value['currency']}}- {{$value['price']}} </b> <span></span></h5>
                     <p class="mb-0 font-13">(Per person Price (Taxes and fees include)</p>
                  </div>
                  <div class="col-12 col-md-6 text-md-right">
                     <form method="POST" action="booking-details" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ json_encode($value) }}" name="obj" />
                        <p class="mb-0"><small class="pt-2"><i class="fa fa-clock-o red-color"></i> Only {{$value['numberOfBookableSeats']}} tickets left at this price</small> <button class="red-btn-sm float-right ml-2" type="submit" >Select <i class="fa fa-angle-double-right"></i></button></p>
                     </form>
                  </div>
               </div>
               <!--/row-->
               @foreach($value['route'] as $routes)
               <div class="row">
                  <div class="col-md-4 col-7 pr-1">
                     <div class="media">
                        <img src="{{'assets/img/airline/'.$routes['carrierCode'].'.png'}}" class="mr-2 air-logo" alt="">
                        <div class="media-body">
                           <p class="mb-0"><small><b>{{$routes['airlines']}}</b></small></p>
                           <p class="mb-0"><small>Flight {{$routes['aircraft']}}</small></p>
                        </div>
                     </div>
                     <!--/media-->
                     <p class="mb-0"><small><i class="fa fa-clock-o blue-color"></i> Total Trip Time : {{$routes['duration']}}</small></p>
                  </div>
                  <div class="col-md-2 col-5 text-md-center text-right pl-1">
                     <p class="mb-0"><small><b>{{$routes['departureTime']}}</b></small></p>
                     <p class="mb-0"><small><b>{{$routes['returntie']}}</b></small></p>
                  </div>
                  <div class="col-12 d-block d-md-none">
                     <div class="b-dashed"></div>
                  </div>
                  <div class="col-md-4 col-7 text-md-center pr-1">
                     <p class="mb-0"><small>{{$routes['origin_airport']}}</small></p>
                     <p class="mb-0"><small>{{$routes['dst_airport']}}</small></p>
                  </div>
                  <div class="col-md-2 col-5 text-right">
                     <p class="mb-0"><small><b>@if($routes['numberOfStops']==0){{'Non Stop'}}@else {{$route['numberOfStops']}}@endif</b></small></p>
                     <p class="mb-0"><small>{{$class}}</small></p>
                     <p class="mb-0"><a href="{{$routes['dst_airport']}}" class="text-success"><small><b>Details</b></small> <i class="fa fa-angle-double-down"></i></a></p>
                  </div>
               </div>
               <!--/row-->
               @endforeach
               <div class="b-dashed"></div>
               {{-- 
               <div class="row">
                  <div class="col-md-4 col-7 pr-1">
                     <div class="media">
                        <img src="assets/images/air-india.png" class="mr-2 air-logo" alt="">
                        <div class="media-body">
                           <p class="mb-0"><small><b>air india</b></small></p>
                           <p class="mb-0"><small>Flight 41416</small></p>
                        </div>
                     </div>
                     <!--/media-->
                     <p class="mb-0"><small><i class="fa fa-clock-o blue-color"></i> Total Trip Time : 01h:40m</small></p>
                  </div>
                  <div class="col-md-2 col-5 text-md-center text-right pl-1">
                     <p class="mb-0"><small><b>07:30PM,Sat,20mar</b></small></p>
                     <p class="mb-0"><small><b>09:30PM,Sat,20mar</b></small></p>
                  </div>
                  <div class="col-12 d-block d-md-none">
                     <div class="b-dashed"></div>
                  </div>
                  <div class="col-md-4 col-7 text-md-center pr-1">
                     <p class="mb-0"><small>{{$value['origin_airport']}}</small></p>
                     <p class="mb-0"><small>{{$value['dst_airport']}}</small></p>
                  </div>
                  <div class="col-md-2 col-5 text-right">
                     <p class="mb-0"><small><b>Non Stop</b></small></p>
                     <p class="mb-0"><small>Cconomy/Coach</small></p>
                     <p class="mb-0"><a href="{{$value['flightOffers']}}" class="text-success"><small><b>Details</b></small> <i class="fa fa-angle-double-down"></i></a></p>
                  </div>
               </div>
               <!--/row--> --}}
            </div>
            <!--/search-flights-box-->
         	@endif
            @endforeach
            @endif
         </div>
         <!--/col-md-9 col-12-->
      </div>
      <!--/row-->
   </div>
   <!--/container-->
</section>
<!--/search-section-a-->
<section class="search-section-b">
   <div class="container">
      <div class="row">
      </div>
      <!--/row-->
   </div>
   <!--/container-->
</section>
<!--/search-section-b-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function () {
   
   	$('input[type=radio][name=is_return]').on('change', function() {
   
   		switch ($(this).val()) {
   
   			case '1':
   
   			$('#return_form').removeClass('hidden')
   
   			$("#depart_form").removeClass("addWidth");
   
   			$('#depart_form').prop('required',true);
   
   			break;
   
   			case '0':
   
   			$('#return_form').addClass('hidden');
   
   			$("#depart_form").addClass("addWidth");
   
   			$('#depart_form').removeAttr('required');
   
   			break;
   
   		}
   
   	});
   
   });
   
   
   
   
   
   // $(document).on('click', '.nd', function () {
   
   //         // alert($(this).text());
   
   //         $('#origin').val($(this).text());
   
   //         $('#countryList').fadeOut();
   
   //     });
   
   
   
   // $(document).on('click', '.nd1', function () {
   
   //         // alert($(this).text());
   
   //         $('#dst').val($(this).text());
   
   //         $('#countryList1').fadeOut();
   
   //     });
   
   /*function exchange() {
   
   	var value1 = $('#origin').val();
   
   	var value2 = $('#destination').val();
   
   	$('#origin').val(value2);
                // alert(value2);
   
   	$('#destination').val(value1);
   
   }*/
   
</script>
 <script>
//----------PassengerBoxHide\Show---------------    
  $('#passengerBox').hide();
  $('#passenger').click(function(){
	$('#passengerBox').toggle();
  });
  $('#done').click(function(){
    $('#passengerBox').hide();
  });
 //------------------------------------------------------------------------------
        $('childrenValue').html($('children').val());
        $('infantsValue').html($('infants').val());
  //------------------PassengerIncreaseButton------------------      
       function increaseAdultsValue() {
        var value = parseInt(document.getElementById('noofadults').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('noofadults').value = value;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function increaseChildrenValue() {
        var value1 = parseInt(document.getElementById('children').value, 10);
        value1 = isNaN(value1) ? 0 : value1;
        value1++;
        document.getElementById('children').value = value1;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function increaseInfantsValue() {
        var value2 = parseInt(document.getElementById('infants').value, 10);
        value2 = isNaN(value2) ? 0 : value2;
        value2++;
        document.getElementById('infants').value = value2;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
      }
//-----------------PassengerDecreaseButton------------------------
      function decreaseAdultsValue() {
        var value = parseInt(document.getElementById('noofadults').value, 10);
        value = isNaN(value) ? 0 : value;
        value--;
        document.getElementById('noofadults').value = value;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function decreaseChildrenValue() {
        var value1 = parseInt(document.getElementById('children').value, 10);
        value1 = isNaN(value1) ? 0 : value1;
        value1--;
        document.getElementById('children').value = value1;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function decreaseInfantsValue() {
        var value2 = parseInt(document.getElementById('infants').value, 10);
        value2 = isNaN(value2) ? 0 : value2;
        value2--;
        document.getElementById('infants').value = value2;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
      }
   //-------------------------------Price filters------------------------------
    var slider = document.getElementById("myRange");
    var output = document.getElementById("price_show");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
    
//------------------------End filters-----------------------------  
 </script>
@endsection