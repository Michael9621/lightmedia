@extends('layout.main')

	@section('nav_content')

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('home')}}">Mwangaza<span>.</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto"> 
	        	<li class="nav-item active"><a href="{{ route('home')}}" class="nav-link">Home</a></li>
	        	
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection

	@section('content')
		<div class="hero-wrap" style="background-image: url('images/tv.jpg');" data-stellar-background-ratio="0.5">
		 <div style="	background: -webkit-linear-gradient(top, rgba(34,50,188,0.1) 0%, rgba(34,50,188,0.2) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, rgba(34,50,188,0.2) 0%, rgba(34,50,188,0.2) 100%);">
	      <div class="overlay" style=""></div>
		      <div class="container">
		        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
		          <div class="col-md-11 order-md-last ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
		            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Mwangaza media</h1>    
		          </div>
		          <div class="col-md=1 d-none d-md-block">
		            <div class="play-video pb-5 d-flex align-items-center">
		              <p><a href="#" class="popup-vimeo"><span class="icon"><i class="ion-ios-play "></i></span> <span class="play">Play video</span></a></p>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
	    </div>







	@endsection