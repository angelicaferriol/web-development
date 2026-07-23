@extends('common.main')
@section('title', 'Calculate')
@section('content')

<div class="row g-4 mt-2">
    <div class="col-12">
        <div class="minimal-card p-4">
            <h1 class="fw-bold mb-2"><i class="bi bi-calculator-fill me-2 text-primary-custom"></i>Calculation Dashboard</h1>
            <p class="text-muted mb-0">Dynamic calculations computed in real-time based on URL parameters.</p>
        </div>
    </div>

    <!-- Math Result Cards -->
    <div class="col-md-4">
        <div class="minimal-card p-4 text-center border-primary" style="background-color: var(--primary-light);">
            <div class="fs-1 text-primary-custom mb-2"><i class="bi bi-plus-circle-fill"></i></div>
            <h5 class="text-muted fw-bold">Sum</h5>
            <h2 class="display-5 fw-bold text-primary-custom">{{ $sum }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="minimal-card p-4 text-center border-danger" style="background-color: #fef2f2;">
            <div class="fs-1 text-danger mb-2"><i class="bi bi-dash-circle-fill"></i></div>
            <h5 class="text-muted fw-bold">Difference</h5>
            <h2 class="display-5 fw-bold text-danger">{{ $diff }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="minimal-card p-4 text-center border-success" style="background-color: #f0fdf4;">
            <div class="fs-1 text-success mb-2"><i class="bi bi-x-circle-fill"></i></div>
            <h5 class="text-muted fw-bold">Product</h5>
            <h2 class="display-5 fw-bold text-success">{{ $product }}</h2>
        </div>
    </div>

    <!-- Sample Interactive Controls -->
    <div class="col-lg-6">
        <div class="minimal-card p-4">
            <h4 class="fw-bold mb-4 text-info"><i class="bi bi-sliders me-2"></i>Interface Elements</h4>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-muted small fw-semibold">Email Address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-muted small fw-semibold">Description / Notes</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write something..."></textarea>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
                <span class="badge bg-info badge-custom"><i class="bi bi-info-circle me-1"></i>Sample Badge</span>
                <button type="button" class="btn btn-primary-custom">Save Changes</button>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="minimal-card p-4 h-100 d-flex flex-column justify-content-center align-items-center text-center">
            <div class="rounded-circle bg-light p-4 border mb-4" style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-gear-wide-connected text-primary-custom" style="font-size: 3rem;"></i>
            </div>
            <h4 class="fw-bold">Dynamic Workspace Active</h4>
            <p class="text-muted px-4 small">Everything is compiled and running inside the container environment. Modify the numbers in the URL to see these values update immediately.</p>
        </div>
    </div>
</div>

@endsection