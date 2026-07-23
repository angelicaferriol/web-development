@extends('common.main')
@section('title', 'Contact Us')
@section('content')

<div class="row justify-content-center mt-2">
    <div class="col-lg-6">
        <div class="minimal-card p-5 text-center">
            <div class="rounded-circle bg-primary bg-opacity-10 text-primary-custom d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px; border: 1px solid rgba(37, 99, 235, 0.2);">
                <i class="bi bi-envelope-at-fill fs-2"></i>
            </div>
            <h1 class="fw-bold mb-3">Get in Touch</h1>
            <p class="text-muted mb-4 small">Have questions or feedback? Feel free to contact our engineering and support team.</p>
            <div class="d-grid gap-3 text-start">
                <div class="p-3 rounded bg-light border d-flex align-items-center gap-3">
                    <i class="bi bi-geo-alt-fill text-primary-custom fs-4"></i>
                    <div>
                        <div class="fw-bold small text-dark">Office Headquarters</div>
                        <div class="text-muted small">123 Innovative Way, Suite 500</div>
                    </div>
                </div>
                <div class="p-3 rounded bg-light border d-flex align-items-center gap-3">
                    <i class="bi bi-telephone-fill text-primary-custom fs-4"></i>
                    <div>
                        <div class="fw-bold small text-dark">Call Us</div>
                        <div class="text-muted small">+1 (555) 019-2834</div>
                    </div>
                </div>
                <div class="p-3 rounded bg-light border d-flex align-items-center gap-3">
                    <i class="bi bi-envelope-fill text-primary-custom fs-4"></i>
                    <div>
                        <div class="fw-bold small text-dark">Email Us</div>
                        <div class="text-muted small">support@laravelapp.io</div>
                    </div>
                </div>
            </div>
            <a href="{{ url('/') }}" class="btn btn-primary-custom mt-5 px-5"><i class="bi bi-house-door me-2"></i>Back to Home</a>
        </div>
    </div>
</div>

@endsection
