@extends('layouts.admin')
@section('content')
<h2 class="mb-4">Site Settings</h2>
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.settings.update') }}">
            @csrf @method('PUT')
            <div class="mb-3">
                <label class="form-label">Clinic Name</label>
                <input type="text" name="clinic_name" class="form-control" value="{{ $settings['clinic_name'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Hero Title</label>
                <input type="text" name="hero_title" class="form-control" value="{{ $settings['hero_title'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Hero Subtitle</label>
                <input type="text" name="hero_subtitle" class="form-control" value="{{ $settings['hero_subtitle'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">About Text</label>
                <textarea name="about_text" class="form-control" rows="4">{{ $settings['about_text'] ?? '' }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Meta Description (SEO)</label>
                <textarea name="meta_description" class="form-control" rows="2">{{ $settings['meta_description'] ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary px-5">Save Settings</button>
        </form>
    </div>
</div>
@endsection