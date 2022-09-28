@extends('layouts.user')
@section('styles')
    @livewireStyles
@endsection

@section('title')
    Admin
@endsection

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Companies</h1>
                <p>Companies list</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home fa-lg"></i></a></li>
                <li class="breadcrumb-item active">Companies</li>
            </ul>
        </div>
        <div class="row">
            @livewire('admin-company')
        </div>
    </main>
@endsection


@section('scripts')
    @livewireScripts
@endsection
