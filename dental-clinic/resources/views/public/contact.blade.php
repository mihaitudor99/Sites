@extends('layouts.public')
@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Contact Us</h1>
    @if($contact)
    <div class="row g-4 justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h5 class="mb-4">Clinic Information</h5>
                    <p>📞 <strong>Phone:</strong> {{ $contact->phone }}</p>
                    <p>✉️ <strong>Email:</strong> {{ $contact->email }}</p>
                    <p>📍 <strong>Address:</strong> {{ $contact->address }}, {{ $contact->city }}</p>
                    <hr>
                    <h6>Opening Hours</h6>
                    <p>Mon–Fri: {{ $contact->hours_weekday_open }} – {{ $contact->hours_weekday_close }}</p>
                    <p>Saturday: {{ $contact->hours_saturday_open }} – {{ $contact->hours_saturday_close }}</p>
                    <p>Sunday: {{ $contact->sunday_closed ? 'Closed' : 'Open' }}</p>
                    @if($contact->maps_url)
                        <a href="{{ $contact->maps_url }}" target="_blank" class="btn btn-primary mt-2">View on Map</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @else
        <p class="text-center text-muted">Contact information not available yet.</p>
    @endif
</div>
@endsection