@extends('layout.main')

@section('nav_content')

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{route('radio')}}">Mwangaza<span>radio</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{route('radio')}}" class="nav-link">shows</a></li>
              <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact us</a></li>
            </ul>
          </div>
        </div>
  </nav>


@endsection


@section('content')

  
    <div class="hero-wrap tv" style="background-image: url('images/studio.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Listen live</h1>
            <p><audio preload="none" controls id="audio1">
              <source src="http://listen.radionomy.com/powerofworshipradio" type="audio/mpeg" />
            </audio></p>
          </div>
          <div class="col-md-5 order-md-last ftco-animate mt-5" data-scrollax=" " class="btn btn-black py-3 px-4">
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

   </div>




@endsection