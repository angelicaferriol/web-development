@extends('common.main')
@section('title', 'Home Info')
@section('content')

<div class="row justify-content-center mt-2">
    <div class="col-lg-6">
        <div class="minimal-card p-5 text-center">
            <div class="rounded-circle bg-primary bg-opacity-10 text-primary-custom d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px; border: 1px solid rgba(37, 99, 235, 0.2);">
                <i class="bi bi-person-circle fs-1"></i>
            </div>
            <h2 class="fw-bold mb-3">Welcome, {{ $name ?? 'Guest' }}!</h2>
            <div class="p-3 rounded bg-light border mb-4">
                <span class="text-muted small">Account ID Reference</span>
                <h4 class="fw-bold text-primary-custom mb-0">{{ $id }}</h4>
            </div>
            <p class="text-secondary small px-3">This route parameters are matched dynamically from your request query paths. You can modify these values directly in the browser's URL to reload custom properties.</p>
            <a href="{{ url('/') }}" class="btn btn-primary-custom mt-4"><i class="bi bi-house-door me-2"></i>Dashboard Home</a>
        </div>
    </div>
</div>

@endsection
