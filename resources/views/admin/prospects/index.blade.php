@extends('layouts.app')

@section('content')

    <div class="container">

        
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>        
    @endif

        <div class="card mt-3">
            <div class="card-body">

                <div class="d-flex">
                    <h1>Prospects <small class="text-muted">Showing All Prospects</small></h1>

                    <div class="ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                              <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Create Prospect</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                    </div>
                </div>
            
            </div>
        </div>
           
        
        @if ($prospects->count())
            @foreach ($prospects as $prospect)
                @include('admin.prospects.partials.prospect-card', ['prospect'=> $prospect])
            @endforeach
        @endif
                


    </div>
    
@endsection