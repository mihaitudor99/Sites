@extends('layouts.public')
@section('content')

{{-- Hero --}}
<div class="bg-primary text-white py-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold">{{ $settings['hero_title'] ?? 'Your Smile, Our Passion' }}</h1>
        <p class="lead">{{ $settings['hero_subtitle'] ?? 'Professional dental care' }}</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg mt-3">Book Appointment</a>
    </div>
</div>

{{-- About --}}
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">About Us</h2>
            <p class="lead text-muted">{{ $settings['about_text'] ?? '' }}</p>
        </div>
    </div>
</div>

{{-- Services preview --}}
@if($services->count())
<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
            @foreach($services as $service)
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
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('services') }}" class="btn btn-primary">View All Services</a>
        </div>
    </div>
</div>
@endif

{{-- Team preview --}}
@if($team->count())
<div class="container py-5">
    <h2 class="text-center mb-5">Meet Our Team</h2>
    <div class="row g-4 justify-content-center">
        @foreach($team as $member)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center">
                <div class="card-body p-4">
                    @if($member->photo)
                        <img src="{{ asset('storage/'.$member->photo) }}" class="rounded-circle mb-3" width="100" height="100" style="object-fit:cover">
                    @else
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width:100px;height:100px;font-size:2rem">
                            {{ strtoupper(substr($member->name, 0, 1)) }}
                        </div>
                    @endif
                    <h5>{{ $member->name }}</h5>
                    <p class="text-primary mb-2">{{ $member->role }}</p>
                    <p class="text-muted small">{{ $member->bio }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

{{-- Contact bar --}}
@if($contact)
<div class="bg-primary text-white py-4">
    <div class="container text-center">
        <h4 class="mb-3">Get In Touch</h4>
        <p class="mb-1">📞 {{ $contact->phone }}</p>
        <p class="mb-1">✉️ {{ $contact->email }}</p>
        <p class="mb-0">📍 {{ $contact->address }}, {{ $contact->city }}</p>
    </div>
</div>
@endif

@endsection