@extends('layout.main_two')
    @section('content')
    	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Create a job listing</h2>
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
                <form action="{{ route('store_career') }}" method="POST">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Job title</label>
                        <input id="inputText3" type="text" class="form-control" name="title" placeholder="enter job name">
                    </div>

                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Deadline</label>
                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input"  name="deadline" data-target="#datetimepicker4" />
                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div> 

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Responsibilities </label>
                        <textarea class="form-control" name="responsibilities" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Required skills</label>
                        <textarea class="form-control" name="skills" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div> 
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>   

                    @csrf        
                </form>
            </div>
        </div>
           


                   
        
    @endsection