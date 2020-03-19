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
	        	<li class="nav-item"><a href="{{ route('about')}}" class="nav-link">about us</a></li>
	        	<li class="nav-item"><a href="{{ route('csr')}}" class="nav-link">CSR</a></li>
	        	<li class="nav-item active"><a href="{{ route('careers')}}" class="nav-link">careers</a></li>
	          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection

	@section('content')
	
	

    <div class="hero-wrap screens" style="background-image: url('images/studio.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text  justify-content-end" data-scrollax-parent="true">
          <div class="col-md-11 order-md-last ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Careers</h1>    
          </div>
        </div>
      </div>
    </div>

    <div class="sermons-content-area sermons-p">
        <div class="container">
            <div class="c0l-12">
                <div class=" heading-section text-center ftco-animate">
                  <h2 class="mb-4">Latest jobs</h2>
                </div>
                    @if($careers->count() > 0)
                      @foreach($careers as $career)
                      <div class="sermons-text text-center mb-4">
                          <h2>{{ $career->title }}</h2>
                          <div class="sermons-meta-data d-flex flex-wrap justify-content-center">
  
                              <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ $career->deadline }}</span></p>
                          </div>
                          
                          <h4>description</h4>
                          <p class="text-center">{{ $career->description }}</p>

                          <h4>responsibilities</h4>
                          <p class="text-center">{{ $career->responsibilities }}</p>

                          <h4>skills</h4>
                          <p class="text-center">{{ $career->skills }}</p>

                          <p class="text-center"><a href="#" class="btn btn-black py-3 px-4">apply</a></p>


                      </div>
                      @endforeach
                    @else
                    <div class="sermons-text text-center">
                       
                        <p class="text-center p-5"> no jobs at the moment </p>
                    

                    </div>
                    @endif
                     
            </div>   
        </div>
        
    </div>





	@endsection