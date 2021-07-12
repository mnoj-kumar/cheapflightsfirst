<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cheap Flight Search</title>
    <!-- Bootstrap CSS -->

      <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

<style type="text/css">

</style>

    </head>
    	<body>

    	 @guest
      		@include('layouts.page_template.front')
   		 @endguest
  <script src="{{ asset('assets') }}/js/jqyery.js"></script>
  <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/custom.js"></script>
  <script src="{{ asset('assets') }}/js/owl.carousel.js"></script>
  <script type="text/javascript" src="{{ asset('assets') }}/js/ui-custom-date.js"></script> 

  <script type="text/javascript" src="{{ asset('assets')}}/js/mainscript.js"></script>

  @include('js_functions/amadeus')

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


    	</body>

    	</html>