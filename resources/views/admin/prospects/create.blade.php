@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Create Prospect</h1>
                    <div class="ms-auto">
           
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                     
                    </div>
                </div>

                <hr>

                <form action="#" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group m-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group m-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group m-3">
                        <label for="name">Profile Image</label>
                        <input type="file" class="form-control-file" name="profile_image">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary m-3">Create Prospect</button>
                    </div>
                </form>
            </div>
        </div>       
    </div>
    
@endsection