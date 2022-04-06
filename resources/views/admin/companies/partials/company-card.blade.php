<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                @if ($company->profile_image)
                    <img src="{{ Storage::url($company->profile_image) }}" alt="">
                    
                @endif
            </div>
            <div class="col-sm-6">
                <h5>{{ $company->name }}</h5>
                <ul>
                    <li>
                        <strong>Email::</strong>{{ $company->email }}
                    </li>
                    <li>
                        <strong>Date added::</strong>{{ $company->my_date }}
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="dropdown d-block">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Actions
                    </button>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item" href="{{ route('admin.companies.edit', ['company'=> $company->id]) }}">Edit</a>
                     
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>