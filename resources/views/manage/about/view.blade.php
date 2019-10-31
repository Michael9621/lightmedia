@extends('layout.main_two')
    @section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">View members</h2>
                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-members</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row">
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">About us</h3>
                    <p class="card-text">{{ $about->about}}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Mission</h3>
                    <p class="card-text">{{ $about->mission}}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Vision</h3>
                    <p class="card-text">{{ $about->vision}}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Core Values</h3>
                    <p class="card-text">{{ $about->corevalues}}</p>
                </div>
            </div>

            <a href="{{ route('edit_about',['id' => $about->id]) }}" class="btn btn-success btn-sm text-center">edit</a>
        </div>
        
    </div>
    @endsection