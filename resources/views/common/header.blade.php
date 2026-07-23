<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
            <i class="bi bi-cpu-fill text-primary-custom"></i>
            <span>LaravelApp</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('compute*') ? 'active' : '' }}" href="{{ route('compute', ['num1' => 5, 'num2' => 10]) }}">Compute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('post*') ? 'active' : '' }}" href="{{ route('post') }}">Posts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('user*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Users
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border" aria-labelledby="navbarDropdown" style="background-color: #ffffff;">
                        <li><a class="dropdown-item py-2" href="{{ route('user') }}"><i class="bi bi-person-plus me-2 text-primary-custom"></i>Create User</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('user.list') }}"><i class="bi bi-people me-2 text-primary-custom"></i>User List</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>