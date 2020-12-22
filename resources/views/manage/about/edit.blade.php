@extends('layout.main_two')
    @section('content')
    	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit about us
                    </h2>
                    <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-create members</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
                   
                   
        <div class="row">
            <div class="col-xl-12">
                <!-- ============================================================== -->
                <!-- basic form  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('update_about', ['id' => $about->id])}}" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Learn more about us</label>
                                        <textarea class="form-control" name="about" id="exampleFormControlTextarea1"  rows="5">{{ $about->about }}</textarea>

                                        <label for="exampleFormControlTextarea1">Mission</label>
                                        <textarea class="form-control" name="mission" id="exampleFormControlTextarea1" rows="5">{{ $about->mission }}</textarea>

                                        <label for="exampleFormControlTextarea1">Vision</label>
                                        <textarea class="form-control"  name="vision" id="exampleFormControlTextarea1" rows="5">{{ $about->vision }}</textarea>

                                        <label for="exampleFormControlTextarea1">Core values</label>
                                        <textarea class="form-control" name="corevalues" id="exampleFormControlTextarea1" rows="5">{{ $about->corevalues }}</textarea>


                                        <button class="btn btn-success" type="submit">Edit about us</button>
                                    </div>

                                    @csrf
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form  -->
                <!-- ============================================================== -->
            </div>
        
        </div>
    @endsection