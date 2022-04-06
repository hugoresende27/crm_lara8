@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Create Company</h1>
                    <div class="ms-auto">
           
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{ route('admin.companies.dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                     
                    </div>
                </div>

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
              
                <form action="{{ route('admin.companies.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group m-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group m-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                   
                    <div class="text-center">
                        <button class="btn btn-primary m-3">Create Company</button>
                    </div>
                </form>
            </div>
        </div>       
    </div>
    
@endsection