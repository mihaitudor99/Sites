@extends('layouts.admin')
@section('content')
<h2 class="mb-4">Dashboard</h2>
<div class="row g-4">
    <div class="col-md-3">
        <div class="card bg-primary text-white shadow-sm border-0">
            <div class="card-body text-center p-4">
                <h1 class="display-4 fw-bold">{{ $stats['services'] }}</h1>
                <p class="mb-0">Services</p>
                <a href="{{ route('admin.services') }}" class="btn btn-light btn-sm mt-2">Manage</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success text-white shadow-sm border-0">
            <div class="card-body text-center p-4">
                <h1 class="display-4 fw-bold">{{ $stats['team'] }}</h1>
                <p class="mb-0">Team Members</p>
                <a href="{{ route('admin.team') }}" class="btn btn-light btn-sm mt-2">Manage</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-info text-white shadow-sm border-0">
            <div class="card-body text-center p-4">
                <h1 class="display-4 fw-bold">✉️</h1>
                <p class="mb-0">Contact Info</p>
                <a href="{{ route('admin.contact') }}" class="btn btn-light btn-sm mt-2">Edit</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning text-white shadow-sm border-0">
            <div class="card-body text-center p-4">
                <h1 class="display-4 fw-bold">⚙️</h1>
                <p class="mb-0">Site Settings</p>
                <a href="{{ route('admin.settings') }}" class="btn btn-light btn-sm mt-2">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection