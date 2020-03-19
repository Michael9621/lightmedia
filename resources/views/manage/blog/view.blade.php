@extends('layout.main_two')
    @section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">View posts</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-posts</a></li>
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
                                    <th>featured</th>
                                    <th>title</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($blogs->count() > 0)
                                    @foreach($blogs as $blog)
                                   <tr>
                                       <td><img src="{{ $blog->featured}}" alt="post featured" style="height: 150px; width:150px;"></td>
                                       <td>{{ $blog->title }}</td>
                                       <td><a href="{{ route('edit_csr', ['id' => $blog->id])}}" class="btn btn-sm btn-success"> edit </a></td>
                                       <td><a href="{{ route('delete_csr', ['id' => $blog->id])}}" class="btn btn-sm btn-danger"> delete </a></td>
                                   </tr>
                                   @endforeach
                                @else  
                                <tr>
                                   <td>no posts yet</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @endsection