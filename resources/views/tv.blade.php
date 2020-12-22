@extends('layout.main')


	@section('nav_content')

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('tv')}}"><img style="height:50px; width:100px;" src="images/tvlogo.jpg"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	<li class="nav-item active"><a href="{{ route('tv')}}" class="nav-link">shows</a></li>
	        	<li class="nav-item"><a href="{{ route('livetv')}}" class="nav-link">Live</a></li>
	          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact us</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>


	@endsection




	@section('content')



    <div class="hero-wrap tv" style="background-image: url('images/tv.jpg');" data-stellar-background-ratio="0.5">
	    <div style="  background: -webkit-linear-gradient(top, rgba(34,50,188,0.2) 0%, rgba(34,50,188,0.3) 0%); /* Chrome10-25,Safari5.1-6 */
  			background: linear-gradient(to bottom, rgba(34,50,188,0.3) 0%, rgba(34,50,188,0.2) 0%)">  
	      <div class="overlay"></div>
	      <div class="container">
		        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
		          <div class="col-md-7 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
		            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore our tv shows</h1>
		            <p><a href="{{ route('livetv')}}" class="btn btn-black py-3 px-4">watch live</a></p>
		          </div>
		         <div class="col-md-5 order-md-last ftco-animate mt-5" data-scrollax=" " class="btn btn-black py-3 px-4">
		          </div>
		         
		        </div>
	      </div>
	    </div>
    </div>


   <div class="cards-list">
  
		<div class="card 1">
		  <div class="card_image"> <img src="https://cdn.shopify.com/s/files/1/0101/2792/products/The_Life_of_Jesus_2_1024x1024.jpg?v=1521745552" /> </div>
		</div>

		<div class="card 2">
		  <div class="card_image">
		    <img src="https://is3-ssl.mzstatic.com/image/thumb/Music128/v4/e9/0a/af/e90aaf65-9c3a-c55e-f3bb-c315ad18e96d/859728489068_cover.jpg/600x600bf.png" />
		    </div>
		</div>

		<div class="card 3">
		  <div class="card_image">
		    <img src="https://i0.wp.com/family.org.my/2019/wp-content/uploads/2018/10/9780310752028.jpg?fit=475%2C648&ssl=1" />
		  </div>
		</div>

		<div class="card 1">
		  <div class="card_image"> <img src="https://i1.wp.com/beginningandend.com/wp-content/uploads/2018/02/Living-Biblically-CBS-Christian-Review-Blasphemy-Mockery-of-the-christian-faith-e1519558840532.jpg?ssl=1" /> </div>
		</div>

		<div class="card 2">
		  <div class="card_image">
		    <img src="https://www.titletrakk.com/Images/movies-dvds/christy-tv-show.jpg" />
		    </div>
		</div>

		<div class="card 3">
		  <div class="card_image">
		    <img src="https://www.philcooke.com/wp-content/uploads/maxresdefault4-780x405.jpg" />
		  </div>
		</div>

		<div class="card 1">
		  <div class="card_image"> <img src="https://thumbnailer.mixcloud.com/unsafe/300x300/extaudio/a/9/d/2/7a69-62f7-49cd-b398-dd543ac359c6" /> </div>
		</div>

		<div class="card 2">
		  <div class="card_image">
		    <img src="https://www.visionvideo.com/img/product/large/A33214D.jpg"/>
		    </div>
		</div>

		<div class="card 3">
		  <div class="card_image">
		    <img src="https://m.media-amazon.com/images/I/91wmAc3krtL._SS500_.jpg" />
		  </div>
		</div>

   </div>





	@endsection