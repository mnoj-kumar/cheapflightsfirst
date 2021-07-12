@extends('layouts.index', [

	'namePage' => 'home',

	])

	@section('content')


  <section class="banner-section" style="background-image: url(assets/images/banners.jpg);">
    <div class="red-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h1 class="text-white"><b>Contact Us</b></h1>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="form-section" style="background-image: url(assets/images/contact-us.svg);">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-12">
          <div class="contact-info">
            <h3 class="orange-color mb-4"><b>Get in Touch</b></h3>
            <form>
              <div class="row">
                <div class="col-md-6 col-12 mb-3">
                  <input class="form-control form-control-lg rounded-0" type="text" placeholder="Name">
                </div>
                <div class="col-md-6 col-12 mb-3">
                  <input class="form-control form-control-lg rounded-0" type="email" placeholder="Email">
                </div>
                <div class="col-md-12 col-12 mb-3">
                  <input class="form-control form-control-lg rounded-0" type="text" placeholder="Subject">
                </div>
                <div class="col-md-12 col-12 mb-3">
                  <input class="form-control form-control-lg rounded-0" type="text" placeholder="Phone">
                </div>
                <div class="col-md-12 col-12 mb-3">
                   <textarea class="form-control form-control-lg rounded-0" id="" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12 col-12 mb-3">
                  <button class="red-btn-lg btn-block rounded-0">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/form-section-->

@endsection