<!-- resources/views/include/doctor/docnav.blade.php -->

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center fw-bold fs-3 ps-5" style="color: #3cb4fc;" href="{{ route('admin') }}">
            <img src="{{ asset('images/Logo_Blue.png') }}" alt="Logo" width="65" height="65"
                class="d-inline-block align-text-top me-3">
            SCMS
        </a>

        <div class="navbar-nav ms-auto">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="font-size: 20px; margin-right: 40px;">
                    {{ auth()->user()->name }} {{-- Assuming you are using Laravel's authentication --}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"
                    style="font-size: 18px;">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
