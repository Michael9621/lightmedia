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
	        	<li class="nav-item"><a href="{{ route('home')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href="{{ route('about')}}" class="nav-link">about us</a></li>
	        	<li class="nav-item"><a href="{{ route('csr')}}" class="nav-link">CSR</a></li>
	        	<li class="nav-item"><a href="{{ route('careers')}}" class="nav-link">careers</a></li>
	          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection

	@section('content')
		
    <div class="hero-wrap screens " style="background-image: url('images/studio.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-end" data-scrollax-parent="true">
          <div class="col-md-12 order-md-last ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }"> 
           <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About us</h1>    
            
          </div>
        </div>
      </div>
    </div>
  

    <div class="sermons-content-area sermons-margin section-padding-100-0">
        <div class="container">
            <div class="col-12">
                <!-- Sermons Text -->       
                <div class="sermons-text text-center">
                    <h2><b>learn more about us</b></h2>

                    <p class="text-center">{{ $about = null ?$about->about:"nothing to show" }}</p>
                </div>    
            </div>   
        </div>
    </div>

    
    <div class="sermons-content-area sermons-p">
        <div class="container">
            <div class="col-12">
                <div class=" heading-section text-center ftco-animate">
                  <h2 class="mb-4">mission, vision & core values</h2>
                </div>
                <div class="row">
                  <div class="col-md-4">      
                    <div class="sermons-text text-center">
                      <p class="text-center">{{ $about = null ?$about->mission:"nothing to show" }}</p>
                    </div>
                  </div>
                  <div class="col-md-4">      
                    <div class="sermons-text text-center">
                        <p class="text-center">{{ $about = null ?$about->vision:"nothing to show" }}</p>
                    </div>
                  </div>
                  <div class="col-md-4">     
                    <div class="sermons-text text-center">
                        <p class="text-center">{{ $about = null ?$about->corevalues:"nothing to show" }}</p>
                    </div>
                  </div>
                </div>    
            </div>   
        </div>
    </div>

	@endsection