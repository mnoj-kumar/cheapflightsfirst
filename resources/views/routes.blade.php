@extends('layouts.index', [

	'namePage' => 'home',

	])

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cheap Flights First</title>


<style type="text/css">
.banner-secs {
  padding: 70px 0px 70px;
  position: relative;
  background-repeat: no-repeat;
  background-position: center bottom;
  background-size: cover;
}
.b-head {
  color: #ffffff;
  text-align: center;
  font-size: 60px;
}
.overlay {
background-color: #00000047;
width: 100%;
height: 100%;
position: absolute;
top: 0px;
left: 0px;
}
/*-----/banner sections-----*/

/*------popular route------*/
.popular-destinations {
  padding: 60px 0px;
  background-color: #fbfdff;
}
.popular-dest-box {
  border-bottom: 3px solid #ee0017;
  box-shadow: 0px 0px 15px #00000029;
  background-color: #ffffff;
  overflow: hidden;
  min-height: 340px;
}
.popular-img {
  width: 100%;
  height: 250px;
  transition: transform .4s;
  margin: 0 auto;
  text-align: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.popular-dest-box:hover .popular-img {
  -ms-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.popular-routes-box h5 {
  color: #9a9a9a;
}
.popular-routes-box {
  padding: 15px 20px;
  position: relative;
  text-align: center;
}
.popular-routes-box h4 {
  color: #222222;
  font-size: 15px;
  border-bottom: 2px solid #eaeaea;
  padding: 5px 0px;
  display: inline-block;
}
/*------popular route end------*/
</style>


<section class="banner-secs" style="background-image: url(assets/images/route/route-banner.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <h1 class="b-head"><strong>Routes</strong></h1>
      </div>
    </div>
  </div>
</section>

<section class="popular-destinations">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-8 offset-md-2">
        <div class="rout-box text-center">
          <h2 class="mb-4"><strong>Popular Routes</strong></h2>
        </div>
      </div>
    </div><!--/row-->

    <div class="row">
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/chicago-to-craotia">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Chicago-to-Craotia.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flight from Chicago to Craotia</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/atlanta-to-mexico">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Atlanta-to-Mexico.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Atlanta to Mexico</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/chicago-to-aruba">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Chicago-to-Aruba.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Chicago to Aruba</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/chicago-to-london">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Chicago-to-London.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Chicago to London</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/dallas-to-tel-aviv">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Dallas-to-Tel-Aviv.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Dallas to Tel Aviv</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/denver-to-new-zealand">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Denver-To-New-Zealand.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Denver To New Zealand</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/houston-to-mexico">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Houston-to-Mexico-City.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Houston to Mexico</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-to-amsterdam">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-New-York-to-Amsterdam.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from New York to Amsterdam</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-to-london">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-New-York-to-London.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from New York to London</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-to-rome-italy">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-New-York-to-Rome-Italy.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from New York to Rome Italy</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-to-reyklavik">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-NY-to-Reyklavik.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from NY to Reyklavik</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/orlando-to-iceland">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-From-Orlando-To-Iceland.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights From Orlando To Iceland</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/orlando-to-vancouver">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-from-Orlando-to-Vancouver.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Orlando to Vancouver</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/cairo-to-dubai">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Flights-to-Dubai-from-Cairo.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Cairo to Dubai</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/las-vegas-to-portland">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Las-Vegas-to-Portland-Flights.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Las Vegas to Portland</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-to-barcelona">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/New-York-to-Barcelona-Flights.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from New York to Barcelona</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-to-dubai">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/New-York-to-Dubai-Flights.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from New York to Dubai</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/seattle-to-bangalore">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Seattle-to-Bangalore-flights.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Seattle to Bangalore</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12 mb-4">
        <a href="/route/seattle-to-shanghai">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/route/Seattle-to-Shanghai-Flights.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Flights from Seattle to Shanghai</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

    </div><!--/row-->
  </div><!--/container-->
</section>


@endsection