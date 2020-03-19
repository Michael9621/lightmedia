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
	        	<li class="nav-item active"><a href="{{ route('csr')}}" class="nav-link">CSR</a></li>
	        	<li class="nav-item"><a href="{{ route('careers')}}" class="nav-link">careers</a></li>
	          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection

	@section('content')
	
		    
	
	<div class="hero-wrap screens" style="background-image: url('images/studio.jpg');" data-stellar-background-ratio="0.5"> nb
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text  justify-content-end" data-scrollax-parent="true">
          <div class="col-md-11 order-md-last ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">giving back</h1>    
          </div>
          
        </div>
      </div>
    </div>
		
	<section class="ftco-section ftco-degree-bg">
      <div class="container">
	  @if($blogs->count() > 0)
        <div class="row">
          <div class="col-lg-8 offset-md-2 ftco-animate">
			<div class="row">

			
				@foreach($blogs as $blog)
				<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url('{{ $blog->featured}}');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">{{ $blog->created_at }}</a></div>
		                  <div><a href="#">Admin</a></div>
		                  
		                </div>
		                <h3 class="heading"><a href="#">{{ $blog->title }}</a></h3>
		                <p>{ !$blog->posts! }</p>
		                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		        </div>
				@endforeach
			    
			</div>
			
          </div> <!-- .col-md-8 -->
		</div>
	   @else
	   	<p class="text-center p-8"> nothing to show </p>
	   @endif
      </div>
    </section> <!-- .section -->




	@endsection