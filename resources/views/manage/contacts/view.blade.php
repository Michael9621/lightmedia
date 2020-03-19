@extends('layout.main_two')
    @section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">View contacts</h2>
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
                                    <th>Location</th>
                                    <th>Phone Number</th>
                                    <th>E-mail</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($contact->count() > 0)
                                    <tr>
                                        <td>{{ $contact->location }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>  <a href="{{ route('edit_contact',['id' => $contact->id]) }}" class="btn-success btn-sm">edit</a></td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="text-center">no contact yet</td>
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