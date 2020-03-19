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
	        	<li class="nav-item"><a href="{{ route('careers')}}" class="nav-link">careers</a></li>
	          <li class="nav-item active"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection

	@section('content')
	
	
		    
		
    <div class="hero-wrap screens" style="background-image: url('images/studio.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-end" data-scrollax-parent="true">
          <div class="col-md-12 order-md-last ftco-animate mt-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Talk to us </h1>    
          </div>
        </div>
      </div>
    </div>

    <div class="sermons-content-area sermons-margin section-padding-100-0">
        <div class="container">
            <div class="col-12">
                <!-- Sermons Text -->       
                <div class="sermons-text text-center">
                    <h2> Avertise with us</h2>
                    <p class="text-center p-4"> nothing to show </p>
                </div>    
            </div>   
        </div>
    </div>

    
    <div class="sermons-content-area sermons-p">
        <div class="container">
            <div class="col-12">
                <div class=" heading-section text-center ftco-animate">
                  <h2 class="mb-4">Reach us</h2>
                </div>
                @if($contacts->count() > 0 )
                  @foreach($contacts as $contact)
                    <div class="row">
                      <div class="col-md-4 d-flex">      
                        <div class="sermons-text text-center">
                          <div class="align-self-stretch box p-4 py-md-5 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                              <span class="icon-map-signs ico"></span>
                            </div>
                            <h3 class="mb-4">Address</h3>
                            <p class="text-center">{{ $contact->location }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex">      
                        <div class="sermons-text text-center">
                          <div class="align-self-stretch box p-4 py-md-5 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-phone2 ico"></span>
                              </div>
                              <h3 class="mb-4">Phone</h3>
                              <p class="text-center">{{ $contact->phone}}</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex">     
                        <div class="sermons-text text-center">
                            <div class="align-self-stretch box p-4 py-md-5 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-paper-plane ico"></span>
                              </div>
                              <h3 class="mb-4">Email Address</h3>
                              <p class="text-center">{{ $contact->email }}</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                    <div class="row">
                      <div class="col-md-4 d-flex">      
                        <div class="sermons-text text-center">
                          <div class="align-self-stretch box p-4 py-md-5 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                              <span class="icon-map-signs ico"></span>
                            </div>
                            <h3 class="mb-4">Address</h3>
                            <p class="text-center">nothing to show </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex">      
                        <div class="sermons-text text-center">
                          <div class="align-self-stretch box p-4 py-md-5 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-phone2 ico"></span>
                              </div>
                              <h3 class="mb-4">Phone</h3>
                              <p class="text-center">nothing to show </p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex">     
                        <div class="sermons-text text-center">
                            <div class="align-self-stretch box p-4 py-md-5 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-paper-plane ico"></span>
                              </div>
                              <h3 class="mb-4">Email Address</h3>
                              <p class="text-center">nothing to show </p>
                            </div>
                        </div>
                      </div>
                    </div>
                @endif    
            </div>   
        </div>
    </div>


    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
      <div class=" heading-section text-center ftco-animate">
        <h2 class="mb-4">Send us a message</h2>
      </div>
      <div class="container px-0">
        <div class="row no-gutters block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="#" class=" p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group text-center">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>




	@endsection