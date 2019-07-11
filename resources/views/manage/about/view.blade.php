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
                    <div class="table-responsive">
                        <table class="table table-borderless first">
                            <thead>
                                <tr>
                                    <th>About</th>
                                    <th>Mission</th>
                                    <th>Vision</th>
                                    <th>Core values</th>
                                    <th>edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($abouts as $about)
                                        <td>{{ $about->about }}</td>
                                        <td>{{ $about->mission }}</td>
                                        <td>{{ $about->vision }}</td>
                                        <td>{{ $about->corevalues }}</td>
                                        <td> <a href="{{ route('edit_about',['id' => $about->id]) }}" class="btn btn-success btn-sm">edit</a></td>
                                    @endforeach
                                </tr>                    

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @endsection