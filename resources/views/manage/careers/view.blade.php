@extends('layout.main_two')
    @section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">View Careers</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard-Careers</a></li>
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
                                    <th>title</th>
                                    <th>view</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($careers->count() > 0)
                                    @foreach($careers as $career)
                                       <tr>
                                           <td>{{$career->title}}</td>
                                           <td><a href="" class="btn btn-sm btn-primary"> view </a></td>
                                           <td><a href="" class="btn btn-sm btn-success"> edit </a></td>
                                           <td><a href="" class="btn btn-sm btn-danger"> delete </a></td>
                                       </tr>
                                   @endforeach
                               @else
                               <tr>
                                   <td>no careers yet</td>
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