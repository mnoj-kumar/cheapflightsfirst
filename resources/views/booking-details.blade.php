@extends('layouts.index', [

  'namePage' => 'home',

  ])

  @section('content')
 
<link rel="stylesheet" type="text/css" href="assets/class/booking-details.css">

<section class="Billing-payment-section">
  <div class="container">
    <div class="price-head mb-3"> 
      <div class="row">
        <div class="col-md-2 col-12">
          <a href="index.php" class="red-btn-sm btn-block">Go Back</a>
        </div>
        <div class="col-md-4 col-12">
          <p class="mb-0 mt-2 text-white"><i class="fa fa-clock-o"></i> Prices not guaranteed until booked</p>
        </div>
        <div class="col-md-6 col-12">
          <p class="mb-0 mt-2 text-white"><i class="fa fa-check"></i> Free cancellation within 24 hours of booking!</p>
        </div>
      </div><!--/row-->
    </div><!--/price-head-->

    <div class="row">
      <div class="col-md-7 col-12">
        <div class="traveler-details-box mb-3">
          <h3 class="p-2">Traveler Details</h3>
          <p class="p-2 bg-secondary text-white font-13 mb-2">Traveler name must match Government-issued Photo ID exactly</p>
          <div class="p-2">
            <p><b>Adult</b></p>
            <form name="booking" id="booking" method="post" action="thank-you" >
            	@csrf
            	<input type="hidden" name="obj" value="{{ json_encode($data) }}">
              <div class="row">
                <div class="col-md-4 col-12 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">First Name*</label>
                    <input type="text" class="form-control pay-field" name="fname" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Middle Name</label>
                    <input type="text" class="form-control pay-field" name="mname" placeholder="Middle Name">
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Last Name*</label>
                    <input type="text" class="form-control pay-field" name="lname" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-3 col-6 pr-1">
                  <div class="form-group">
                    <label class="font-13">Gender*</label>
                    <select name="gender" class="form-control pay-field">
                      <option>Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-6 pl-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Date of Birth*</label>
                    <select name="dob-month" class="form-control pay-field">
                      <option value="1">Month</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-6 pr-1 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Day*</label>
                    <select name="dob-day" class="form-control pay-field">
                      <option>01</option>
                      @for($i=1;$i<=31;$i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-6 pl-1">
                  <div class="form-group">
                    <label class="font-13">Year</label>
                    <input name="dob-year" type="text" class="form-control pay-field" placeholder="Year">
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Email Address*</label>
                    <input type="email" class="form-control pay-field" name="email" placeholder="Email Address">
                  </div>
                </div>
              </div><!--/row-->
              <div class="text-center">
            	<button style="display: none;" type="submit" name="book" class="red-btn-lg pl-3 pr-3">BOOK</button>
          		</div>
            </form>
          </div>
        </div><!--/traveler-details-box-->


        <div class="traveler-details-box mb-1">
          <h3 class="p-2">Payment Details</h3>
          <div class="p-2 blue-bg">
            <div class="row">
              <div class="col-md-4 col-10 pr-md-0">
                <p class="font-11 mb-0 text-white">We Accept <img src="assets/images/payment-mode.png" class="img-fluid"></p>
              </div>
              <div class="col-md-8 col-11 text-right">
                <p class="font-11 mb-0 mt-1">
                  <a href="#" class="text-white ml-1"><u>Payment Acceptance Policy</u> </a>
                  <a href="#" class="text-white ml-1"><u>Privacy Policy</u> </a>
                  <a href="#" class="text-white ml-1"><u>Safe Shopping Guarantee</u> </a>
                </p>
              </div>
            </div>
          </div>
          <div class="p-2">
            <form  >
            	
              <div class="row">
                <div class="col-md-4 col-6 pr-1">
                  <div class="form-group">
                    <label class="font-13">Card Holder's Name*</label>
                    <input type="text" class="form-control pay-field" placeholder="Card Holder's Name">
                  </div>
                </div>
                <div class="col-md-4 col-6 pl-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Card Type*</label>
                    <select class="form-control pay-field">
                      <option selected="selected">Card Type</option>
                      <option value="1">Visa</option>
                      <option value="2">Master Card</option>
                      <option value="3">American Express</option>
                      <option value="5">Discover</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Debit/Credit Card Number*</label>
                    <input type="text" class="form-control pay-field" placeholder="Debit/Credit Card Number">
                  </div>
                </div>
              </div><!--/row-->
              <div class="row">
                <div class="col-md-4 col-4 pr-1">
                  <div class="form-group">
                    <label class="font-13">Expiration month*</label>
                    <select class="form-control pay-field">
                      <option selected="selected" value="0">Month</option>
                      <option value="1">01 - January</option>
                      <option value="2">02 - February</option>
                      <option value="3">03 - March</option>
                      <option value="4">04 - April</option>
                      <option value="5">05 - May</option>
                      <option value="6">06 - June</option>
                      <option value="7">07 - July</option>
                      <option value="8">08 - August</option>
                      <option value="9">09 - September</option>
                      <option value="10">10 - October</option>
                      <option value="11">11 - November</option>
                      <option value="12">12 - December</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 col-4 pl-1 pr-1">
                  <div class="form-group">
                    <label class="font-13">Expiration Year*</label>
                    <select class="form-control pay-field">
                      <option selected="selected" value="0">Year</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                      <option value="2029">2029</option>
                      <option value="2030">2030</option>
                      <option value="2031">2031</option>
                      <option value="2032">2032</option>
                      <option value="2033">2033</option>
                      <option value="2034">2034</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 col-4 pl-1">
                  <div class="form-group">
                    <label class="font-13">CVV Code*</label>
                    <input type="text" class="form-control pay-field" placeholder="CVV">
                  </div>
                </div>
              </div><!--/row-->
              <div class="row">
                <div class="col-md-6 col-12 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Address 1*</label>
                    <input type="text" class="form-control pay-field" placeholder="Address1">
                  </div>
                </div>
                <div class="col-md-6 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Address 2*</label>
                    <input type="text" class="form-control pay-field" placeholder="Address2">
                  </div>
                </div>
              </div><!--/row-->
              <div class="row">
                <div class="col-md-4 col-4 pr-1">
                  <div class="form-group">
                    <label class="font-13">City*</label>
                    <input type="text" class="form-control pay-field" placeholder="City Name">
                  </div>
                </div>
                <div class="col-md-4 col-4 pl-1 pr-1">
                  <div class="form-group">
                    <label class="font-13">Country*</label>
                    <select class="form-control pay-field">
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BR">Brazil</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="CD">Democratic Republic Of The Congo</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="KP">North Korea</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestine</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn Islands</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="KR">South Korea</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option selected="selected" value="US">United States</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                      <option value="UK">LONDON</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 col-4 pl-1">
                  <div class="form-group">
                    <label class="font-13">ZIP Code*</label>
                    <input type="text" class="form-control pay-field" placeholder="ZIP Code">
                  </div>
                </div>
              </div><!--/row-->
              <div class="row">
                <div class="col-md-4 col-12 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Phone*</label>
                    <div class="row">
                      <!-- <div class="col-2 col-md-3 pr-0">
                        <input type="text" class="form-control pay-field">
                      </div> -->
                      <div class="col-10 col-md-9 pl-0">
                        <input type="text" class="form-control pay-field" placeholder="Billing Phone">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Alternate/Mobile Phone</label>
                    <div class="row">
                      <!-- <div class="col-2 col-md-3 pr-0">
                        <input type="text" class="form-control pay-field">
                      </div> -->
                      <div class="col-10 col-md-9 pl-0">
                        <input type="text" class="form-control pay-field" placeholder="Mobile Phone">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Email Address*</label>
                    <input type="text" class="form-control pay-field" placeholder="Email Address">
                  </div>
                </div>
              </div><!--/row-->
              
            </form>
          </div>
        </div><!--/traveler-details-box-->
        <div class="traveler-details-box p-2 mb-3">
          <div class="row">
            <div class="col-md-2 col-4">
              <img src="assets/images/norton.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 offset-md-7 col-8 text-right border-left">
              <p class="mb-0 font-13 blue-color"><i class="fa fa-lock fa-lg red-color"></i> Secure SSL</p>
              <p class="mb-0 font-13 blue-color"><b>BOOKING</b></p>
            </div>
          </div>
        </div>
      </div><!--/col-md-7 col-12-->

      <div class="col-md-5 col-12">
        <div class="traveler-details-box p-2">
          <div class="p-2 bg-light">
            <div class="row">
              <div class="col-md-5 col-12">
                <p class="mb-0"><b>Payment Review</b></p>
              </div>
              <div class="col-md-7 col-12 text-md-right">
                <p class="mb-0 font-13">All prices are quoted in US dollar</p>
              </div>
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
          <div class="bg-light p-2 mb-1">
            <p class="font-13 mb-2"><b>Review and book your trip</b></p>
            <p class="mb-0 font-12">Free cancellation within 24 hours of booking!</p>
            <p class="mb-0 font-12">By selecting to complete this booking I acknowledge that I have read and accept the above Rules & Restrictions, Terms of Use, Privacy Policy and Government Travel Advice.</p>
          </div>
          <div class="bg-light p-2 mb-2">
            <p class="font-13 mb-2"><b>Terms & Conditions</b></p>
            <p class="mb-0 font-12">We at cheapflightsfirst.com care about your trust & hence use judicious measures to protect your personal information within our organization. Unfortunately, no data transmission or storage system can be 100% guaranteed and secured, so If you have a reason to believe that your interaction with us is no longer secure (for example, if you feel that the security of your account has been compromised), please call us immediately on our 24/7 customer service cum support team at 1-xxx-xxx-xxxx or mail at info@cheapflightsfirst.com so we can find the root cause & assure a satisfactory resolution to any concern you might have. <a href="#"> Read More </a></p>
            <p class="mb-0 font-12">*By clicking "BOOK" I agree to the total trip cost of US $ 122.08 and the Terms and Conditions and Privacy Policy.</p>
          </div>
          <div class="text-center">
            <button onclick="document.getElementById('booking').submit();" class="red-btn-lg pl-3 pr-3">BOOK</button>
          </div>
        </div><!--/traveler-details-box-->
      </div><!--/col-md-5 col-12-->
    </div><!--/row-->

  </div><!--/container-->
</section><!--/Billing-payment-section-->
  
  
  
  <!--==============Footer===========-->
 @endsection