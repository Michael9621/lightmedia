@extends('layout.main')


	@section('nav_content')

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background:black !important; margin-top:-20px; color:white;">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('tv')}}">Mwangaza<span>T.V</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	<li class="nav-item"><a href="{{ route('tv')}}" class="nav-link">shows</a></li>
	        	<li class="nav-item active"><a href="{{ route('livetv')}}" class="nav-link">Live</a></li>
	          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection



	@section('content')
		<div  class="container y-frame" style="padding: 100px 0px; box-sizing: border-box;" >
		 	<iframe  class="embed-responsive" style="height: 450px;" src="https://www.youtube.com/embed/BbDF_GXBmGc?rel=0&controls=1&showinfo=0&autoplay=1&modestbranding=1" frameborder="0"  allowfullscreen></iframe>
		</div>
	@endsection