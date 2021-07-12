      <form method="get" action="{{ route('search') }}" autocomplete="off">
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
                  <input class="form-control custom-form rounded-0" value="1" type="text" name="passenger" id="passenger" autocomplete="off" required>
                  <div class="passenger-box" id="passengerBox">
                    <div class="row p-2">
                      <div class="col-7">
                        <p class="font-12 mt-0 mb-0"><strong>Adult</strong></p>
                      </div>
                      <div class="col-5 text-right"> 
                        <input class="form-control custom_form rounded-0 border-0" type="text" value="1" id="noofadults" name="noofadults" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                        <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer red-color" id="minusAdults" onclick="decreaseAdultsValue()"></i><span class="mr-2 ml-2 font-12 bold" id="adultsValue"></span><i class="fa fa-plus-circle pointer red-color"  onclick="increaseAdultsValue()" style="margin-left: 25px;"></i></p>
                      </div>
                    </div><!--/row-->
                    <div class="border-bottom"></div>
                    <div class="row p-2">
                      <div class="col-7 pr-0">
                        <p class="font-12 mt-0 mb-0"><strong>Children</strong> <span class="text-secondary">(Age 2-14)</span></p>
                      </div>
                      <div class="col-5 text-right">
                        <input class="form-control custom_form rounded-0 border-0" type="text" value="0" id="children" name="children" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                        <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer red-color" id="minusChildren" onclick="decreaseChildrenValue()"></i><span class="mr-2 ml-2 font-12 bold" id="childrenValue"></span><i class="fa fa-plus-circle pointer red-color" onclick="increaseChildrenValue()" style="margin-left: 25px;"></i></p>
                      </div>
                    </div><!--/row-->
                    <div class="border-bottom"></div>
                    <div class="row p-2 mb-1">
                      <div class="col-7">
                        <p class="font-12 mt-0 mb-0"><strong>Infants</strong> <span class="text-secondary">(Under 2)</span></p>
                      </div>
                      <div class="col-5 text-right">
                        <input class="form-control custom_form rounded-0 border-0" type="text" value="0" id="infants" name="infants" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                        <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer red-color" id="minusInfants" onclick="decreaseInfantsValue()"></i><span class="mr-2 ml-2 font-12 bold" id="infantsValue"></span><i class="fa fa-plus-circle pointer red-color" onclick="increaseInfantsValue()" style="margin-left: 25px;"></i></p>
                      </div>
                    </div><!--/row-->
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
                    </div><!--/row-->
                    <p class="red-btn-sm btn-block mb-2" id="done">Done</p>
                    
                  </div><!--/passenger-box-->
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
                        </div><!--/row-->
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
                  </div><!--/row-->
               </div><!--/col-12 col-md-112-->

            </div><!--/row-->
         </div><!--/form-section-->
      </form>
