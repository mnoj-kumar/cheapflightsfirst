<style type="text/css">
  /*----------footer--------*/
#footer {
  background: #0e1b31;
  border-top: 3px solid #eeeeee;
  padding: 45px 0px;
  color: #fff;
  font-size: 14px;
}
#footer .copyright {
  text-align: center;
}
#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #ccc;
}
.copyright {
  background-color: #021027;
  text-align: center;
  color: #fff;
  padding: 10px 15px;
  border-top: 1px solid #ee0017;
}
ul.web_link {
  list-style: none;
  padding-left: 0px;
}
ul.web_link li a{
  color: #cccccc;
}
ul.web_link li {
  padding: 4px 0px;
  border-bottom: 1px dashed #ee0017;
}
.footer_box h4 {
  border-bottom: 2px solid #ee0017;
  font-size: 20px;
  margin-bottom: 10px;
  padding: 5px 0px;
  display: inline-block;
}
/*-------End of footer------*/
</style>

  <!--==============Footer===========-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="footer_box">
              <h4>Travel Deals</h4>
              <ul class="web_link">
                <li><a href="#">Cheap Flight to Europe</a></li>
                <li><a href="#">Cheap Flight to Asia</a></li>
                <li><a href="#">Popular Flights</a></li>
                <li><a href="#">Popular Airlines</a></li>
              </ul>
            </div>
          </div>
           <div class="col-6 col-md-3">
            <div class="footer_box">
              <h4>About</h4>
              <ul class="web_link">
                <li><a href="#">Home</a></li>
                <li><a href="{{url('about-us')}}">About Us</a></li>
                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="footer_box">
              <h4>Disclaimer</h4>
              <p class="text-justify font-11">All the fares mentioned on CheapFlightsFirst includes fuel surcharges, convenience fee, and other taxes. Ticket fares are neither refundable nor transferable or assignable. Other restrictions may also apply as per the terms and conditions.</p>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="footer_box">
              <h4>Contact Us</h4>
               <p><strong class="orange-color">Address:</strong> 8th The Green, Dover, DE, 19901.<br>
                <strong class="orange-color">Email:</strong> info@cheapflightsfirst.com<br>
              <strong class="orange-color">Call Toll Free:</strong> +1 (833) 930-1616 </p>
            </div>
          </div>
        </div><!--/row-->
      </div><!--/container-->
    </div>
  </footer><!-- #footer -->
  <div class="copyright">
    &copy; Copyright 2020 <a href="www.cheapflightsfirst.com" class="t-color">Cheap Flights First</a>. All Rights Reserved
  </div>

  <script src="{{ asset('assets') }}/js/jqyery.js"></script>
  <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/custom.js"></script>
  <script src="{{ asset('assets') }}/js/owl.carousel.js"></script>
  <script type="text/javascript" src="{{ asset('assets') }}/js/ui-custom-date.js"></script> 

  <script type="text/javascript" src="{{ asset('assets')}}/js/mainscript.js"></script>
  <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
        owl.owlCarousel({
          items:2,
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true
      });
    })

    $('.owl-carousel').owlCarousel({
      loop:true,
      autoplay:true,
      margin:10,
      nav:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:3
        }
      }
    })
  </script>


