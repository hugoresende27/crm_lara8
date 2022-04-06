@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Edit company <small class="text-muted">{{ $company->name }}</small></h1>
                    <div class="ms-auto">
           
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{ route('admin.companies.dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('admin.companies.show', ['company'=>$company->id] )}}">Show</a>
                               
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>  
        
        {{-- UPDATE FORM  --}}

        <div class="row">

            <div class="col-sm-4">
                <div class="card mt-3">
                    <div class="card-body">
                        @if (isset($company->location->id))
                            <ul>
                                <li>
                                    Country: {{ $company->location->country }}
                                </li>
                                <li>
                                    City: {{ $company->location->city }}
                                </li>
                                <li>
                                    Street: {{ $company->location->street }}
                                </li>
                                <li>
                                    Zip Code: {{ $company->location->zip_code }}
                                </li>
                            </ul>                           
                        @endif
                        <hr>
                        <button class="btn btn-outline-primary btn-sm btn-block">Edit Location</button>
                        <button class="btn btn-outline-danger btn-sm btn-block"> <i class="fas fa-trash"> Delete Location </i> </button>
                    </div>
                
                </div>

            </div>

            <div class="col-sm-8">
                <div class="card mt-3">

                    <div class="card-body">

                        <h5 >Edit Personal Details</h5>
                        <hr>


                        @if ($errors->count())
                            <div class="alert alert-danger">
                                @foreach ($errors->all()  as $message)
                                <ul>
                                    <li style="list-style: none"> {{ $message }}     </li>          
                                </ul>   
                                @endforeach   
                            </div>
                        @endif               
                        
                        <form action="{{ route('admin.companies.update' , ['company'=>$company->id]) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group m-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $company->name }}">
                            </div>
                            <div class="form-group m-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $company->email }}">
                            </div>
                        
                            <div class="text-center">
                                <button class="btn btn-primary m-3">Update {{ $company->name }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            

        </div>
      
    </div>
    
@endsection