@extends('common.main')
@section('title', 'User List')
@section('user-list')

<div class="mt-2">
    <div class="minimal-card p-4 mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
            <h1 class="fw-bold mb-1"><i class="bi bi-people-fill me-2 text-primary-custom"></i>Active Workspace Users</h1>
            <p class="text-muted mb-0 small">A list of all registered team members and their administrative roles.</p>
        </div>
        <a href="{{ route('user') }}" class="btn btn-primary-custom"><i class="bi bi-person-plus me-2"></i>Add Member</a>
    </div>

    <div class="row g-4">
        @forelse ($users as $user)
            <div class="col-md-6 col-lg-4">
                <div class="minimal-card p-4 d-flex flex-column h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary bg-opacity-10 text-primary-custom d-flex align-items-center justify-content-center fw-bold fs-5" style="width: 48px; height: 48px; border: 1px solid rgba(37, 99, 235, 0.2);">
                                {{ strtoupper(substr($user->first_name, 0, 1)) }}{{ strtoupper(substr($user->last_name, 0, 1)) }}
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</h5>
                                <span class="text-muted small"><i class="bi bi-envelope me-1"></i>{{ $user->email }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-auto pt-3 d-flex align-items-center justify-content-between border-top" style="border-color: var(--border-color) !important;">
                        <div>
                            @php
                                $badgeClass = 'badge-regular';
                                $roleName = strtolower($user->user_type_display_name ?? 'regular');
                                if (str_contains($roleName, 'admin')) {
                                    $badgeClass = 'badge-admin';
                                } elseif (str_contains($roleName, 'manager')) {
                                    $badgeClass = 'badge-manager';
                                }
                            @endphp
                            <span class="badge badge-custom {{ $badgeClass }}">
                                {{ $user->user_type_display_name ?? 'Regular User' }}
                            </span>
                        </div>
                        <a href="{{ route('user.showUpdate', $user->id) }}" class="btn btn-outline-custom btn-sm px-3 py-1.5"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="minimal-card p-5 text-center">
                    <i class="bi bi-people text-muted mb-3" style="font-size: 3rem;"></i>
                    <h5 class="fw-bold text-muted">No users found</h5>
                    <p class="text-muted small">Register a user to get started.</p>
                    <a href="{{ route('user') }}" class="btn btn-primary-custom mt-3">Add User</a>
                </div>
            </div>
        @endforelse
    </div>
</div>

@endsection