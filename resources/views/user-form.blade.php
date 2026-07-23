@extends('common.main')
@section('title', 'Create User')
@section('user-form')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="minimal-card p-4">
            <div class="text-center mb-5">
                <h1 class="fw-bold mb-2">Create New <span class="text-primary-custom">User Account</span></h1>
                <p class="text-muted small">Register a new profile and assign permissions in the workspace.</p>
            </div>

            <form action="{{ route('user.submit') }}" method="POST" class="needs-validation">
                @csrf
                
                @if ($errors->any())
                    <div class="alert alert-danger border-0 mb-4" style="background-color: #fef2f2; color: #ef4444; border: 1px solid #fee2e2;" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="fname" class="form-label small fw-semibold text-muted">First Name</label>
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="John" value="{{ old('fname') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="mname" class="form-label small fw-semibold text-muted">Middle Name</label>
                        <input type="text" id="mname" name="mname" class="form-control" placeholder="Doe" value="{{ old('mname') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="lname" class="form-label small fw-semibold text-muted">Last Name</label>
                        <input type="text" id="lname" name="lname" class="form-control" placeholder="Smith" value="{{ old('lname') }}">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label small fw-semibold text-muted">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border text-muted"><i class="bi bi-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control" placeholder="john.doe@gmail.com" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="user_type" class="form-label small fw-semibold text-muted">Role / User Type</label>
                        <select class="form-select" id="user_type" name="user_type">
                            <option value="" selected>Select User Type</option>
                            @foreach ($user_type as $type)
                                <option value="{{ $type->id }}" @selected(old('user_type') == $type->id)>{{ $type->display_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="pass" class="form-label small fw-semibold text-muted">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border text-muted"><i class="bi bi-lock"></i></span>
                            <input type="password" id="pass" name="password" class="form-control" placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-between align-items-center">
                    <a href="{{ route('user.list') }}" class="btn btn-outline-custom"><i class="bi bi-arrow-left me-2"></i>Back to List</a>
                    <button type="submit" class="btn btn-primary-custom px-5"><i class="bi bi-check2-circle me-2"></i>Register User</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
