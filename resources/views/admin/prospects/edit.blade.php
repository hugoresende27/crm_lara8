@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    
                    <div class="ms-auto">
           
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('admin.prospects.show') }}">Show</a>
                               
                            </div>
                        </div>
                     
                    </div>
                </div>

               

               
              
            </div>
        </div>       
    </div>
    
@endsection