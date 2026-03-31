@extends('layouts.public')
@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Our Services</h1>
    <div class="row g-4">
        @forelse($services as $service)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center p-4">
                    <h5 class="card-title">{{ $service->name }}</h5>
                    <p class="text-muted">{{ $service->description }}</p>
                    @if($service->price)
                        <span class="badge bg-primary fs-6">{{ number_format($service->price, 2) }} RON</span>
                    @endif
                </div>
            </div>
        </div>
        @empty
            <p class="text-center text-muted">No services listed yet.</p>
        @endforelse
    </div>
</div>
@endsection