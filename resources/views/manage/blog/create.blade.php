@extends('layout.main_two')
    @section('content')
    	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Create post</h2>
                    <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-create csr posts</a></li>
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
                                <form action="{{route('store_csr')}}" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input id="inputText3" type="text" class="form-control" name="title" placeholder="enter title">
                                        </div>

                                        <div class="form-group">
                                        	<label for="inputText3" class="col-form-label">enter featured image</label>
                                            <input id="inputText3" type="file" class="form-control" name="featured">
                                        </div>

                                       	<label for="inputText3" class="col-form-label">write posts</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="summernote" name="posts" rows="6" placeholder="Write posts"></textarea>
                                        </div>
                                       	
                                        <button class="btn btn-success" type="submit">Store post</button>
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