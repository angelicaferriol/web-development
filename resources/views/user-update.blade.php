@extends('common.main')
@section('title', 'Update User')
@section('user-update')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="minimal-card p-4">
            <div class="text-center mb-5">
                <h1 class="fw-bold mb-2">Update User <span class="text-primary-custom">#{{ $user->id }}</span></h1>
                <p class="text-muted small">Modify this workspace member's profile parameters and credentials.</p>
            </div>

            <form action="{{ route('user.updateSubmit', $user->id) }}" method="POST">
                @csrf
                @method('put')

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
                        <input type="text" id="fname" name="fname" class="form-control" value="{{ old('fname', $user->first_name) }}">
                    </div>
                    <div class="col-md-4">
                        <label for="mname" class="form-label small fw-semibold text-muted">Middle Name</label>
                        <input type="text" id="mname" name="mname" class="form-control" value="{{ old('mname', $user->middle_name) }}">
                    </div>
                    <div class="col-md-4">
                        <label for="lname" class="form-label small fw-semibold text-muted">Last Name</label>
                        <input type="text" id="lname" name="lname" class="form-control" value="{{ old('lname', $user->last_name) }}">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label small fw-semibold text-muted">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border text-muted"><i class="bi bi-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="user_type" class="form-label small fw-semibold text-muted">Role / User Type</label>
                        <select class="form-select" id="user_type" name="user_type">
                            @foreach ($user_type as $type)
                                <option value="{{ $type->id }}" @selected(old('user_type', $user->user_type_id) == $type->id)>{{ $type->display_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-between align-items-center">
                    <a href="{{ route('user.list') }}" class="btn btn-outline-custom"><i class="bi bi-arrow-left me-2"></i>Cancel</a>
                    <button type="submit" class="btn btn-primary-custom px-5"><i class="bi bi-check2-circle me-2"></i>Save Updates</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
