@extends('layouts.public')
@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Our Team</h1>
    <div class="row g-4 justify-content-center">
        @forelse($team as $member)
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
        @empty
            <p class="text-center text-muted">No team members listed yet.</p>
        @endforelse
    </div>
</div>
@endsection