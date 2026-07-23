@extends('common.main')
@section('title', 'Welcome - Web Dev Portfolio')
@section('content')

<div class="row align-items-center justify-content-between g-5 py-5">
    <div class="col-lg-6">
        <h1 class="display-4 fw-bold mb-4">
            Web Development <br>
            <span class="text-primary-custom">Junior Year</span> <br>
            Course Repository
        </h1>
        <p class="lead text-muted mb-4">
            A comprehensive compilation of class exercises, route patterns, database migrations, and bootstrap built during the Junior Year Web Development course, focusing on core <strong>PHP</strong> and <strong>Laravel Blade</strong> architectures.
        </p>
        <div class="d-flex gap-3">
            <a href="{{ route('user.list') }}" class="btn btn-primary-custom px-4 py-3">
                <i class="bi bi-folder-fill me-2"></i>Explore Projects
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-custom px-4 py-3">
                Contact Info
            </a>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="minimal-card p-4">
            <h3 class="fw-bold mb-4 text-primary-custom"><i class="bi bi-journal-bookmark-fill me-2"></i>Course Syllabus Outline</h3>
            <p class="text-secondary small">This repository contains practical implementations of backend and frontend concepts covered in our university lectures:</p>
            <hr style="border-color: var(--border-color);">
            <div class="mt-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary-custom d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">User Management (CRUD)</h6>
                        <span class="text-muted small">SQLite-backed creation, listing, and updates.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary-custom d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="bi bi-calculator"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Dynamic Routing</h6>
                        <span class="text-muted small">Routing parameters and controller calculations.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary-custom d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="bi bi-chat-left-text"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Post Timeline & Feeds</h6>
                        <span class="text-muted small">Relational table data and draft states.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mt-4">
    <div class="col-md-4">
        <div class="minimal-card p-4 h-100">
            <div class="fs-1 text-primary-custom mb-3"><i class="bi bi-person-badge"></i></div>
            <h4 class="fw-bold">User Profiles CRUD</h4>
            <p class="text-muted small">Demonstrates user registration validation, SQLite insertions, assigning course roles, and updating active listings.</p>
            <a href="{{ route('user.list') }}" class="text-primary-custom text-decoration-none fw-bold small">Explore Users <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="minimal-card p-4 h-100">
            <div class="fs-1 text-primary-custom mb-3"><i class="bi bi-cash-stack"></i></div>
            <h4 class="fw-bold">Billing Matrix Layout</h4>
            <p class="text-muted small">Demonstrates layouts, nested loops, conditional checks, and basic mock login templates.</p>
            <a href="{{ route('pricing') }}" class="text-primary-custom text-decoration-none fw-bold small">Explore Pricing <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="minimal-card p-4 h-100">
            <div class="fs-1 text-primary-custom mb-3"><i class="bi bi-file-post"></i></div>
            <h4 class="fw-bold">Post publishing Feed</h4>
            <p class="text-muted small">Demonstrates draft state mechanics, relationship filters, and status locks on active posts.</p>
            <a href="{{ route('post') }}" class="text-primary-custom text-decoration-none fw-bold small">Explore Feed <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>

@endsection
