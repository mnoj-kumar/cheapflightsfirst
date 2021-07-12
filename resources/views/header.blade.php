<style type="text/css">
/*=========== navigation ===========*/
.flights-first {
  background-color: #ffffff;
  border-top: 3px solid #ee0017;
  z-index: 9;
}
.flights-first .dropdown-menu.active {
  display: block;
}
.flights-first .dropdown-menu.active.show {
  display: none;
}
.flights-first .navbar-toggler:focus {
  outline: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
}
.flights-first .offcanvas-navbar .nav-item .nav-link {
  padding: 13px 15px !important;
}
.flights-first .offcanvas-navbar .cart-quantity {
  position: absolute;
  top: 3px;
  right: 0;
  font-size: 13px;
}
.flights-first .offcanvas-navbar .dropdown-menu {
  left: auto;
  right: 0;
  width: 230px;
  padding: 0;
}
.flights-first .offcanvas-navbar .dropdown-menu li {
  border-bottom: 1px solid #dddddd;
  padding: 14px;
}

.flights-first .offcanvas-navbar .dropdown-toggle::after {
  display: none;
}
.flights-first .price {
  font-weight: bold;
  font-size: 18px;
  color: #7AA93C;
}
.flights-first .product-dropdown-list li a {
  display: block;
  padding: 10px 0;
  border-bottom: 1px dotted #dddddd;
}
.flights-first .product-dropdown-list li:last-child a {
  border-bottom: none;
  padding-bottom: 0;
}
.flights-first .dropdown-item {
  padding: 10px;
  border-bottom: 1px solid #dddddd;
}
.flights-first .dropdown-item:focus, .flights-first .dropdown-item:hover {
  background-color: #ee0017;
  color: #ffffff;
}
.flights-first .carousel-control-next, .flights-first .carousel-control-prev {
  opacity: 1;
  color: #ffffff;
}
.flights-first .carousel-control-next:hover, .flights-first .carousel-control-prev:hover {
  background-color: transparent !important;
}
.flights-first .carousel {
  padding-bottom: 10px;
}
.flights-first .dropdown-heading {
  padding-top: 10px;
}
.flights-first .navbar-brand {
  color: #265196;
  font-size: 24px;
  font-weight: bold;
}
.flights-first .iconbar {
  color: #ee0017;
}
.flights-first .product-dropdown-menu .product-heading {
  color: #265196;
  font-size: 20px;
  font-weight: 600;
}
.flights-first .product-dropdown-menu ul li {
  border-bottom: 1px solid #dddddd;
}
.flights-first .product-dropdown-menu ul li:last-child {
  border-bottom: none;
}
.flights-first .product-dropdown-menu ul li a {
  padding: 10px;
  display: block;
}
.flights-first .product-dropdown-menu ul li a:hover {
  background-color: #265196;
  color: #ffffff;
}
.flights-first .navbar-nav .nav-item .nav-link {
  color: #0d3d79;
  padding: 13px 10px;
  font-size: 16px;
}
.flights-first .dropdown-menu {
  border: none;
  background-color: #ffffff !important;
  font-size: 14px;
}
.flights-first .dropdown-menu .nav-item .nav-link {
  color: #1c1c1c;
  padding: 6px 0;
}
/*--------End of navigation-------*/

/*-------- media queries --------*/
@media screen and (min-width: 992px) {
  .navbar {
    padding-top: 0px;
    padding-bottom: 0px;
  }
  .navbar .dropdown-menu {
    border-radius: 0;
    border: none;
/*  -webkit-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    -ms-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    -o-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);  */
    display: block;
    left: 0;
    opacity: 0;
    padding: 0;
    right: 0;
    top: 96%;
    min-width: 12rem;
    transform-origin: 0 0;
    -webkit-transform: rotateY(75deg);
    -moz-transform: rotateY(75deg);
    -ms-transform: rotateY(75deg);
    -o-transform: rotateY(75deg);
    transform: rotateY(75deg);
    -webkit-transition: 0.3s linear all;
    -moz-transition: 0.3s linear all;
    -ms-transition: 0.3s linear all;
    -o-transition: 0.3s linear all;
    transition: 0.3s linear all;
    visibility: hidden;
    width: 100%;
  }
  .navbar .dropdown {
    position: static;
  }
  .navbar .dropdown:hover > .dropdown-menu {
    opacity: 1;
    transform: none;
    -webkit-transition: 0.3s linear all;
    -moz-transition: 0.3s linear all;
    -ms-transition: 0.3s linear all;
    -o-transition: 0.3s linear all;
    transition: 0.3s linear all;
    visibility: visible;
  }
  .navbar .dropdown-submenu {
    position: relative;
  }
  .navbar .dropdown-submenu .dropdown-menu {
    left: 100%;
    top: 0;
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
  }
  .navbar .dropdown-submenu:hover > .dropdown-menu {
    opacity: 1;
    visibility: visible;
    -webkit-transition: 0.3s linear all;
    -moz-transition: 0.3s linear all;
    -ms-transition: 0.3s linear all;
    -o-transition: 0.3s linear all;
    transition: 0.3s linear all;
  }
}
@media screen and (max-width: 992px) {
  #navbarSupportedContent {
    position: absolute;
    top: 70px;
    background-color: #f9f9f9;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    left: -20px;
    right: -20px;
    height: auto !important;
    overflow-y: auto;
  }
  .flights-first .navbar-container {
    justify-content: flex-start;
    position: relative;
  }
  .flights-first .offcanvas-navbar {
    position: absolute;
    right: 0;
    top: -3px;
    flex-direction: unset;
  }
  .flights-first .navbar-collapse .navbar-nav .nav-item .nav-link {
    padding: 10px 0;
    border-bottom: 1px solid #dddddd;
    font-size: 14px;
  }
  .flights-first .navbar-collapse .navbar-nav .nav-item .nav-link:last-child {
    /*border-bottom: none;*/
    border-bottom: 1px solid #9cc0d5;
  }
  .main-wrapper .content-wrapper h1 {
    font-size: 30px;
  }
  .main-wrapper .content-wrapper p {
    font-size: 16px;
  }
}
.box_shadow{
  border-top: 2px solid #a4c2db;
  -webkit-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  -moz-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  -ms-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  -o-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
}
img.t-logo {
  width: 165px;
}
@media (max-width: 768px) {
  a.navbar-brand img {
    width: 115px;
  }
}
.dropdown-toggle::after {
  color: #ee0017 !important;
}
/*-----//End of header media queries ------*/
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3S71W32068"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3S71W32068');
</script>

</head>
<body>
  <nav class="navbar navbar-expand-lg flights-first">
    <div class="container navbar-container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars iconbar"></i>
      </button>
      <a class="navbar-brand" href="/"><img src="assets/images/logo.svg" class="t-logo" alt="Cheap Flights First"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          
          <li class="nav-item dropdown position-relative">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Special Deals 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <li><a href="domestic-flights" class="dropdown-item">Domestic Flights</a></li>
              <li><a href="international-flights" class="dropdown-item">International Flights</a></li>
              <li><a href="round-trip" class="dropdown-item"> Book Round Trip Flights</a></li>
             
              <li><a href="group-travel" class="dropdown-item">Group Travel</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown position-relative">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Travel By Interest 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="last-minute-flights" class="dropdown-item">Last Minute Travel</a></li>
              <li><a href="red-eye-flights" class="dropdown-item">Red Eye Flights</a></li>
              <li><a href="weekend-getaways" class="dropdown-item">Weekend Getaways</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown position-relative">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Travel By Price 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="flights-under-budgets" class="dropdown-item">Flights Under Budget</a></li>
              
              <li><a href="flights-by-class" class="dropdown-item">Flights By Class</a></li>
            
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-plane red-color"></i> My Bookings</a>
          </li>

          <li class="nav-item">
            <a href="{{url('routes')}}" class="nav-link"><i class="fa fa-map red-color"></i> Route </a>
          </li>

        </ul>
      </div>
      <ul class="navbar-nav offcanvas-navbar mr-auto">
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="fa fa-volume-control-phone red-color fa-lg"></i> <b>+1 (833) 930-1616</b></a>
        </li>
      </ul>
    </div><!-- container -->
  </nav>