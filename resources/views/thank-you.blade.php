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
        <div class="col-md-6 col-12 mb-md-0 mb-3">
          <h2 style="margin-top: 113px;text-align: center;">Thank you for visiting us!</h2>
          <div>
            
            <span class="mb-0 font-16" >Customer name</span> : <span>{{ $post_data['fname'] }} {{ $post_data['mname'] }} {{ $post_data['lname'] }}</span></br>
            <span class="mb-0 font-16">Gender </span> : <span>{{ $post_data['gender'] }}</span></br>
            <span class="mb-0 font-16">Date of Birth </span> : <span>{{ $post_data['dob-day'] }}-{{ $post_data['dob-month'] }}-{{ $post_data['dob-year'] }}</span></br>
          </div>
        </div>
       
        <div class="col-md-5 col-12">
        <div class="traveler-details-box p-2">
          <div class="p-2 bg-light">
            <div class="row">
              <div class="col-md-5 col-12">
                <p class="mb-0"><b>Summery of Your Booking</b></p>
              </div>
              <!-- <div class="col-md-7 col-12 text-md-right">
                <p class="mb-0 font-13">All prices are quoted in US dollar</p>
              </div> -->
            </div><!--/row-->
          </div>
          <p class="p-2 blue-bg text-white mb-3"><img src="assets/images/go.png"> Outbound Flight</p>
          @if(count($data->route) > 0 )
          <div class="row mb-3">
            <div class="col-3 pr-1">
              <img src="assets/img/airline/{{ $data->route[0]->carrierCode }}.png" alt="" class="pay-flight">
              <p class="mb-0 font-11 text-secondary">{{ $data->route[0]->airlines }}</p>
              <p class="mb-0 font-12">{{  $data->route[0]->aircraft }}</p>
            </div>
            <div class="col-5 pl-1 pr-1 text-center">
              @php 
                  $date_origin = $data->route[0]->departureTime.' '.$data->route[0]->departureDate; 
                  $date_dst = $data->route[0]->returntie.' '.$data->route[0]->returnDate; 
                  
              @endphp
              <p class="mb-0 font-11"><b>{{ date('h:i a D, d M', strtotime($date_origin)) }} </b></p>
              <p class="mb-0 font-11"><b>{{ date('h:i a D, d M', strtotime($date_dst))  }} </b></p>
            </div>
            <div class="col-4 pl-1 text-right">
              <p class="mb-0 font-11"><b>{{ $data->route[0]->origin }}</b></p>
              <p class="mb-0 font-11"><b>{{ $data->route[0]->dst}}</b></p>
              <p class="mb-0 font-11 text-secondary">Total Trip Time :{{ $data->route[0]->duration }}</p>
            </div>
          </div><!--/row-->
           @endif

          <p class="p-2 blue-bg text-white mb-3"><img src="assets/images/back.png"> Inbound Flight</p>
           @if(count($data->route) > 0 )
          <div class="row mb-3">
            <div class="col-3 pr-1">
              <img src="assets/img/airline/{{ $data->route[0]->carrierCode }}.png" alt="" class="pay-flight">
              <p class="mb-0 font-11 text-secondary">{{ $data->route[1]->airlines }}</p>
              <p class="mb-0 font-12">{{  $data->route[1]->aircraft }}</p>
            </div>
             @php 
                  $date_origin_re = $data->route[1]->departureTime.' '.$data->route[1]->departureDate; 
                  $date_dst_re = $data->route[1]->returntie.' '.$data->route[1]->returnDate; 
                  
              @endphp
            <div class="col-5 pl-1 pr-1 text-center">
              <p class="mb-0 font-11"><b>{{ date('h:i a D, d M', strtotime($date_origin_re)) }} </b></p>
              <p class="mb-0 font-11"><b>{{ date('h:i a D, d M', strtotime($date_dst_re))  }} </b></p>
            </div>
            <div class="col-4 pl-1 text-right">
              <p class="mb-0 font-11"><b>{{ $data->route[1]->origin }}</b></p>
              <p class="mb-0 font-11"><b>{{ $data->route[1]->dst}}</b></p>
              <p class="mb-0 font-11 text-secondary">Total Trip Time :{{ $data->route[1]->duration }}</p>
            </div>
          </div><!--/row-->
          @endif
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="bg-dark">
                  <th class="font-11 text-white">Traveler Type</th>
                  <th class="font-11 text-white">Traveler</th>
                  <th class="font-11 text-white">Ticket Price</th>
                  <th class="font-11 text-white">Taxes & Fees</th>
                  <th class="font-11 text-white">Sub Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="font-12">Adult</td>
                  <td class="font-12">1</td>
                  <td class="font-12">$86.00</td>
                  <td class="font-12">$36.08</td>
                  <td class="font-12">$ 122.08</td>
                </tr>
              </tbody>
            </table>
          </div><!--/table-responsive-->
          <p class="p-2 bg-secondary font-13 text-right text-white mb-3">Total Trip Cost : <b>{{ $data->currency }} {{ $data->price }}</b></p>
          
         
        </div><!--/traveler-details-box-->
      </div><!--/col-md-5 col-12-->
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/about-section-->

@endsection