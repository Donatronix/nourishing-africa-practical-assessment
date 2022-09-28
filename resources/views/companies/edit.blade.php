@extends('layouts.user')

@section('title')
    Add Company
@endsection

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i>Update Company</h1>
                <p>Companies list</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
                <li class="breadcrumb-item active">Update company details</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    @if($errors->any())
                        <div class="text-center">
                            {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                        </div>
                    @endif
                    <form method="post" action="{{ route('companies.update',$company->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" value="{{ old('name',$company->name) }}" name="name"
                                       type="text"
                                       placeholder="Enter full name">
                                @error('name')
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input value="{{ old('email',$company->email) }}" class="form-control" name="email"
                                       type="email"
                                       placeholder="Enter email address">
                                @error('email')
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <textarea class="form-control" name="location" rows="4"
                                          placeholder="Enter your address"
                                          maxlength="190">{{ old('location',$company->location) }}</textarea>
                                @error('location')
                                <div class="text-danger">{{ $errors->first('location') }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="country">Country</label>
                                <select class="form-control" id="country" name="country">
                                    <option>Select country</option>
                                    @foreach($countries as $nation)
                                        <option @if ($nation->name===old('country',$company->country)) selected
                                                @endif value="{{ $nation->name }}">{{ $nation->name }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <div class="text-danger">{{ $errors->first('country') }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update
                            </button>&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-danger" href="{{ url('/') }}"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection


