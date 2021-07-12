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

			left: 7px;

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

				</div><!--/row-->



				<div class="form-section">

                  
					<div class="row">

						<div class="col-12 col-md-10 pr-md-1 mb-md-0 mb-2">

							<div class="row">

								<div class="col-12 col-md-5 pr-md-1 mb-md-0 mb-2">

									<div class="row">
										<div class="col-md-6 col-12 pr-md-1 position-relative">
											<span class="t-lable"><i class="fa fa-map-marker fa-lg red-color"></i></span>

											<input class="form-control custom-form" required="required" value="{{$origin}}" id="origin" type="text" placeholder="Enter City / Airport code ">
											<label id="origin-error" class="error" for="origin" style="display: none;"></label>

											<input type="hidden" name="origin" id="origin_hidden" value="{{$origin}}">

											<img src="assets/images/makeusfly-loading.gif"  alt="loader" class="search_loader" style="display: none;">                              
										</div>

										<div class="col-md-6 col-12 pl-md-1 position-relative">
											<span class="t-lable2"><i class="fa fa-map-marker fa-lg red-color"></i></span>
                                            <input class="form-control custom-form" required="required" value="{{$dst}}"  id="destination" type="text" placeholder="Enter City / Airport code ">
  											<label id="destination-error" class="error" for="destination" style="display: none;"></label>
  											<input type="hidden" name="destination" id="destination_hidden"  value="{{$dst}}">
  											<img src="assets/images/makeusfly-loading.gif" alt="loading" class="search_loader toloader" style="display: none;">
										</div>
									</div><!--/row-->

								</div>

								<div class="col-12 col-md-4 pl-md-1 pr-md-1 mb-md-0 mb-2">

									<div class="row">

										<div class="col-md-6 col-6 pr-md-1 pr-0 position-relative">

											<span class="t-lable"><i class="fa fa-calendar red-color"></i></span>

											<input class="form-control custom-form {{$customRadio==0?'addWidth':''}}" value="{{$departureDate}}" name="departureDate" required="required" type="text" placeholder="Depart date" id="depart_form">

										</div>

										<div class="col-md-6 col-6 pl-md-1 pl-0 position-relative {{$customRadio==0?'hidden':''}}" id="return_form" >

											<span class="t-lable5"><i class="fa fa-calendar red-color"></i></span>

											<input class="form-control custom-form" value="{{$returnDate}}" name="returnDate" required="required" type="text" placeholder="Return date">

										</div>

									</div><!--/row-->

								</div>

								<div class="col-12 col-md-3 pl-md-1">

									<div class="row">

										<div class="col-md-6 col-12 pr-md-1 mb-md-0 mb-2 position-relative">
                                  
             

											<span class="t-lable4"><i class="fa fa-caret-down red-color"></i></span>

											<select class="form-control custom-form" name="passenger">

												<option value="1" } >Passenger</option>

												<option value="1" {{$passenger=='1'?'selected="selected"':''}}>1</option>

												<option value="2" {{$passenger=='2'?'selected="selected"':''}}>2</option>

												<option value="3" {{$passenger=='3'?'selected="selected"':''}}>3</option>

												<option value="4" {{$passenger=='4'?'selected="selected"':''}}>4</option>

											</select>  

										</div>

										<div class="col-md-6 col-12 pl-md-1 position-relative">

											<span class="t-lable3"><i class="fa fa-caret-down red-color"></i></span>

											<select class="form-control custom-form" name="class">

												 <option value="ECONOMY">Classes</option>

										          <option value="ECONOMY" {{$class=='ECONOMY'?'selected="selected"':''}}>Economy</option>

										          <option value="BUSINESS" {{$class=='BUSINESS'?'selected="selected"':''}}>Business</option>

										          <option value="FIRST" {{$class=='FIRST'?'selected="selected"':''}}>First</option>

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

								</div><!--/row-->

							</div><!--/side-box-->

							<div class="side-box mb-2">

								<p class="mb-2"><strong>Filter by Stops</strong></p>

								<div class="row mb-1">
									<div class="col-6">
										<label class="parent-checkbox"> 0 Stop 
											<input type="checkbox">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="col-6 text-right">	<p class="mb-0"><small>$111.00</small></p>
									</div>
								</div><!--/row-->	                     <div class="row mb-1">									<div class="col-6">										<label class="parent-checkbox"> 1 Stop 											<input type="checkbox">											<span class="checkmark"></span>										</label>									</div>									<div class="col-6 text-right">	<p class="mb-0"><small>$122.02</small></p>									</div>								</div><!--/row-->

								

							</div><!--/side-box-->

							<div class="side-box mb-2">

								<p class="mb-2"><strong>Flight Time</strong></p>

								<p class="font-13 mb-0"><b>Depart From </b> {{ $origin }}</p>

								<p class="font-12 mb-0"><b>07:00 AM - </b> 09:00 PM</p>

								<div class="slidecontainer mb-3">

									<input type="range" min="1" max="100" value="50" class="price_slide" id="myRange">

								</div>

								<p class="font-13 mb-0"><b>Return From </b> {{ $dst }}</p>

								<p class="font-12 mb-0"><b>06:15 AM - </b> 10:15 PM</p>

								<div class="slidecontainer">

									<input type="range" min="1" max="100" value="50" class="price_slide" id="myRange">

								</div>

							</div><!--/side-box-->

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

									

							</div><!--/side-box-->

						</div><!--/col-md-3 col-12-->







						<div class="col-md-9 col-12">

							<div class="row">

								<div class="col-12 col-md-12">

									<h3 class="red-color mb-0">{{$origin}} to {{$dst}} </h3>

									<p class="mb-1"><small><b>{{date('F j, Y',strtotime($departureDate))}} @if(!empty($returnDate)) {{'-'}} {{ date('F j, Y',strtotime($returnDate))}}@endif</b></small></p>

									<p><small>Prices are <b> {{$customRadio==1?'ROUND TRIP':'SINGLE TRIP '}}</b> per person, include all taxes and fees, but do not include baggage fees</small></p>

								</div>

							</div><!--/row-->



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

								</div><!--/row-->
                              


								@foreach($value['route'] as $routes)



								<div class="row">

									<div class="col-md-4 col-7 pr-1">

										<div class="media">

		

											<img src="{{'assets/img/airline/'.$routes['carrierCode'].'.png'}}" class="mr-2 air-logo" alt="">

											<div class="media-body">

												<p class="mb-0"><small><b>{{$routes['airlines']}}</b></small></p>

												<p class="mb-0"><small>Flight {{$routes['aircraft']}}</small></p>

											</div>

										</div><!--/media-->

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

								</div><!--/row-->

								

								@endforeach

								<div class="b-dashed"></div>

								{{-- <div class="row">

									<div class="col-md-4 col-7 pr-1">

										<div class="media">

											<img src="assets/images/air-india.png" class="mr-2 air-logo" alt="">

											<div class="media-body">

												<p class="mb-0"><small><b>air india</b></small></p>

												<p class="mb-0"><small>Flight 41416</small></p>

											</div>

										</div><!--/media-->

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

								</div><!--/row--> --}}

							</div><!--/search-flights-box-->

							@endforeach

							@endif



						</div><!--/col-md-9 col-12-->



					</div><!--/row-->

				</div><!--/container-->

			</section>

			<!--/search-section-a-->









			<section class="search-section-b">

				<div class="container">

					<div class="row">



					</div><!--/row-->

				</div><!--/container-->

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



			@endsection