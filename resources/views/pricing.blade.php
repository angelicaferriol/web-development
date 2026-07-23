@extends('common.main')
@section('title', 'Pricing')
@section('pricing')

<div class="row g-4 mt-2">
    <!-- Left Login Panel -->
    <div class="col-12 col-lg-4">
        <div class="minimal-card p-4 h-100 d-flex flex-column justify-content-center">
            <h3 class="fw-bold mb-4 text-center text-primary-custom"><i class="bi bi-shield-lock-fill me-2"></i>Welcome Back</h3>
            <form class="d-grid gap-3">
                <div>
                    <label for="email" class="form-label fw-semibold small text-muted">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
                </div>
                <div>
                    <label for="password" class="form-label fw-semibold small text-muted">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="••••••••">
                </div>
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <button type="submit" class="btn btn-primary-custom px-4">Login</button>
                    <a href="#" class="text-primary-custom small text-decoration-none hover-underline">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Pricing Panel -->
    <div class="col-12 col-lg-8">
        <div class="minimal-card p-4">
            <div class="text-center mb-5">
                <h1 class="fw-bold mb-2">Simple, <span class="text-primary-custom">Transparent</span> Pricing</h1>
                <p class="text-muted small max-w-lg mx-auto">
                    Choose the plan that fits your workflows best. Transparent features, no hidden fees, instant setup.
                </p>
            </div>

            <!-- Pricing Boxes -->
            <div class="row g-3 mb-5">
                <div class="col-4">
                    <div class="minimal-card p-3 text-center" style="background-color: #f8fafc;">
                        <div class="text-muted small">Free</div>
                        <h3 class="fw-bold my-2">$0</h3>
                        <span class="badge bg-secondary badge-custom">Basic</span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="minimal-card p-3 text-center border-primary" style="background-color: var(--primary-light);">
                        <div class="text-primary-custom small">Pro</div>
                        <h3 class="fw-bold my-2 text-primary-custom">$19</h3>
                        <span class="badge bg-primary badge-custom">Popular</span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="minimal-card p-3 text-center" style="background-color: #f8fafc;">
                        <div class="text-muted small">Enterprise</div>
                        <h3 class="fw-bold my-2">$99</h3>
                        <span class="badge bg-info badge-custom">Team</span>
                    </div>
                </div>
            </div>

            <!-- Comparison Table -->
            <div class="p-3 rounded border" style="background-color: #ffffff;">
                <h5 class="fw-bold mb-4 text-center"><i class="bi bi-layers-fill me-2 text-primary-custom"></i>Compare Plans</h5>
                <div class="table-responsive">
                    <table class="table table-borderless table-custom align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="text-start pb-2">Features</th>
                                <th class="text-center pb-2">Free</th>
                                <th class="text-center pb-2">Pro</th>
                                <th class="text-center pb-2">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start py-3 fw-semibold">Public Repositories</td>
                                <td class="text-center text-success"><i class="bi bi-check-circle-fill"></i></td>
                                <td class="text-center text-success"><i class="bi bi-check-circle-fill"></i></td>
                                <td class="text-center text-success"><i class="bi bi-check-circle-fill"></i></td>
                            </tr>
                            <tr>
                                <td class="text-start py-3 fw-semibold">Private Repositories</td>
                                <td class="text-center text-muted">—</td>
                                <td class="text-center text-success"><i class="bi bi-check-circle-fill"></i></td>
                                <td class="text-center text-success"><i class="bi bi-check-circle-fill"></i></td>
                            </tr>
                            <tr>
                                <td class="text-start py-3 fw-semibold">Granular Permissions</td>
                                <td class="text-center text-muted">—</td>
                                <td class="text-center text-muted">—</td>
                                <td class="text-center text-success"><i class="bi bi-check-circle-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection