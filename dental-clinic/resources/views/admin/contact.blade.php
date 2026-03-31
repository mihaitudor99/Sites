@extends('layouts.admin')
@section('content')
<h2 class="mb-4">Contact Information</h2>
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.contact.update') }}">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $contact->phone ?? '' }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $contact->email ?? '' }}">
                </div>
                <div class="col-md-8">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $contact->address ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">City</label>
                    <input type="text" name="city" class="form-control" value="{{ $contact->city ?? '' }}">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Google Maps URL</label>
                    <input type="text" name="maps_url" class="form-control" value="{{ $contact->maps_url ?? '' }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Facebook URL</label>
                    <input type="text" name="facebook_url" class="form-control" value="{{ $contact->facebook_url ?? '' }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Instagram URL</label>
                    <input type="text" name="instagram_url" class="form-control" value="{{ $contact->instagram_url ?? '' }}">
                </div>
                <div class="col-12"><hr><h6>Opening Hours</h6></div>
                <div class="col-md-3">
                    <label class="form-label">Weekday open</label>
                    <input type="time" name="hours_weekday_open" class="form-control" value="{{ $contact->hours_weekday_open ?? '' }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Weekday close</label>
                    <input type="time" name="hours_weekday_close" class="form-control" value="{{ $contact->hours_weekday_close ?? '' }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Saturday open</label>
                    <input type="time" name="hours_saturday_open" class="form-control" value="{{ $contact->hours_saturday_open ?? '' }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Saturday close</label>
                    <input type="time" name="hours_saturday_close" class="form-control" value="{{ $contact->hours_saturday_close ?? '' }}">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sunday_closed" {{ ($contact->sunday_closed ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label">Closed on Sundays</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection