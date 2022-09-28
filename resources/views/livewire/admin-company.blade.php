<div class="col-md-12">
    <div class="tile">
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong><br/> {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Success!</strong><br /> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="tile-title">Companies</h3>
                </div>
                <div class="pull-right">
                    <label class="control-label"><strong>Search</strong></label>
                    <input placeholder="Search for company" name="search_param" type="text" wire:model="search_param"
                           value="">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($user->companies as $company)
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->location }}</td>
                                <td>{{ $company->country }}</td>
                                <td>
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item">
                                            <a href="{{ route('companies.edit', $company->id) }}"
                                               class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ route('companies.destroy', $company->id) }}"
                                               class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @endif
                </tbody>
            </table>
            @if($users)
                <div class="pull-right">
                    {{ $users->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
