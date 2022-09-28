@extends('layouts.user')

@section('title')
    Add Company
@endsection

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i>Add Company</h1>
                <p>Companies list</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
                <li class="breadcrumb-item active">Add company</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                    @endif
                    <form method="post" action="{{ route('companies.store') }}">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" value="{{ old('name') }}" name="name" type="text"
                                       placeholder="Enter full name">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" value="{{ old('name') }}" name="email" type="email"
                                       placeholder="Enter email address">
                                @if($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <textarea class="form-control" name="location" rows="4"
                                          placeholder="Enter your address" maxlength="190">{{ old('name') }}</textarea>
                                @if($errors->has('location'))
                                    <div class="text-danger">{{ $errors->first('location') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="country">Country</label>
                                <select class="form-control" id="country" name="country">
                                    <option>Select country</option>
                                    @foreach($countries as $country)
                                        <option @if ($country->name===old('country')) selected
                                                @endif value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('country'))
                                    <div class="text-danger">{{ $errors->first('country') }}</div>
                                @endif
                            </div>

                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add
                            </button>&nbsp;
                            &nbsp;<a class="btn btn-danger" href="{{ url('/') }}"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection


