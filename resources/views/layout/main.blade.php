<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mwangaza media</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ secure_asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="{{ secure_asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
  </head>
  <body>

    <!--START NAV-->
	  @yield('nav_content')
    <!-- END nav -->
    
    @yield('content')

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mwangaza Media.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('home') }}" class="py-2 d-block">Home</a></li>
                <li><a href="{{ route('tv') }}" class="py-2 d-block">T.V</a></li>
                <li><a href="{{ route('radio') }}" class="py-2 d-block">Radio</a></li>
                <li><a href="{{ route('about') }}" class="py-2 d-block">About us</a></li>
                <li><a href="{{ route('csr') }}" class="py-2 d-block">social responsibility</a></li>
                <li><a href="{{ route('careers') }}" class="py-2 d-block">Careers</a></li>
                <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Reach us</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jewel Complex, opposite TRM 6th Floor</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@mwangazamedia.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
   <a href="#" >Designed by Kevo </a> &copy; <script>document.write(new Date().getFullYear());</script>  
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ secure_asset('js/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ secure_asset('js/popper.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ secure_asset('js/aos.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ secure_asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ secure_asset('js/google-map.js') }}"></script>
  <script src="{{ secure_asset('js/main.js') }}"></script>
    
  </body>
</html>