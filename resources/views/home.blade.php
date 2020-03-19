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
	        	<li class="nav-item"><a href="{{ route('about')}}" class="nav-link">about us</a></li>
	        	<li class="nav-item"><a href="{{ route('csr')}}" class="nav-link">CSR</a></li>
	        	<li class="nav-item"><a href="{{ route('careers')}}" class="nav-link">careers</a></li>
	          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection

	@section('content')
	
		<div class="hero-wrap" style="background-image: url('images/studio.jpg');" data-stellar-background-ratio="0.5">
		 <div style="	background: -webkit-linear-gradient(top, rgba(34,50,188,0.4) 0%, rgba(34,50,188,0.2) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom, rgba(34,50,188,0.4) 0%, rgba(34,50,188,0.2) 100%);">
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
      

	    <div class="sermons-content-area sermons-p">
	        <div class="container">
	            <div class="col-12">
	                <div class=" heading-section text-center ftco-animate">
	                  <h2 class="mb-4">Check us out</h2>
	                </div>
	                <div class="row">
	                  <div class="col-md-6 d-flex">      
	                    <div class="sermons-text text-center border">
						<h3><b>Mwangaza TV</b></h3>
	                        
	                        <div class="sermons-cata">
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="icon icon-facebook" aria-hidden="true"></i></a>
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="youtube"><i class="icon icon-youtube" aria-hidden="true"></i></a>
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="icon icon-twitter" aria-hidden="true"></i></a>
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"><i class="icon icon-instagram" aria-hidden="true"></i></a>
	                        </div>
	                        <p class="text-center">Mwangaza TV is a television station that exists to spread the Love of Christ to all and to bring many unto him</p>
	                        <p class="text-center"><a href="https://mwangazatv.co.ke/" class="btn btn-black py-3 px-4">watch</a></p>
	                    </div>
	                  </div>
	                  <div class="col-md-6 d-flex">      
	                    <div class="sermons-text text-center border">
	                        <h3><b>Mwangaza wa Neno Radio</b></h3>
	                        
	                        <div class="sermons-cata">
							<a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="icon icon-facebook" aria-hidden="true"></i></a>
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="youtube"><i class="icon icon-youtube" aria-hidden="true"></i></a>
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="icon icon-twitter" aria-hidden="true"></i></a>
	                            <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"><i class="icon icon-instagram" aria-hidden="true"></i></a>
	                        </div>
	                        <p class="text-center">Mwangaza wa neno radio is a radio station whose main goal is to spread the word of God to all</p>
	                        <p class="text-center"><a href="https://mwangazawanenofm.co.ke/" class="btn btn-black py-3 px-4">Listen</a></p> 
	                    </div>
	                  </div>
	                  
	                </div>    
	            </div>   
	        </div>
	    </div>





	@endsection