@extends('common.main')
@section('title', 'Page Not Found')
@section('content')

<div class="row justify-content-center mt-2">
    <div class="col-lg-6">
        <div class="minimal-card p-5 text-center">
            <h1 class="display-1 fw-bold text-danger mb-3">404</h1>
            <h3 class="fw-bold mb-4">Lost in Space?</h3>
            <p class="text-muted mb-4 small">The route you requested does not exist or has been relocated to another workspace path.</p>
            <div class="overflow-hidden rounded border mb-5">
                <img src="{{ asset('404.jpg') }}" alt="404 Not Found" class="w-100 h-auto">
            </div>
            <a href="{{ url('/') }}" class="btn btn-primary-custom px-5"><i class="bi bi-house-door me-2"></i>Return Home</a>
        </div>
    </div>
</div>

@endsection
