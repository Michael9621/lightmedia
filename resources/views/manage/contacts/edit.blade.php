@extends('layout.main_two')
    @section('content')
    	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit contact</h2>
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

                
        <div class="card">
            <div class="card-body">
                <form action="{{ route('update_contact', ['id' => $contact->id]) }}" method="POST">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Location</label>
                        <input id="inputText3" type="text" value="{{ $contact->location }}" class="form-control" name="location" placeholder="enter location">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Phone</label>
                        <input id="inputText3" type="text" value="{{ $contact->phone }}" class="form-control" name="phone" placeholder="enter phone number">
                    </div> 

                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Email</label>
                        <input id="inputText3" type="email" name="email" value="{{ $contact->email }}" class="form-control"  placeholder="enter email">
                    </div> 
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">update</button>
                    </div>   

                    @csrf        
                </form>
            </div>
        </div>
           


                   
        
    @endsection