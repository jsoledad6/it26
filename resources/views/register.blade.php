@extends('layout')
@section('title', 'Registration')
@include('include.navbar')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                    <h1 class="text-center mb-5">Registration</h1>
                    <form action="{{route('register.post')}}" method="POST">
                        @csrf
                    <div class="mb-4">
                        <input type="text" class="form-control my-3 py-2" placeholder="Name" name="name">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control my-3 py-2" placeholder="Email" name="email">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control my-3 py-2" placeholder="Password" name="password">
                    </div>
                    <div class="mb-4">
                        <select class="form-select" name="role">
                            <option value="admin">Admin</option>
                            <option value="doctor">Doctor</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 mb-4">
                        <button type="submitregister" class="btn btn-color">Register</button>
                    </div>
                    <div class="text-center">
                    <p>Already have an account? <a href="/login" class="login-link"> Login</a></p>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Display SweetAlert for registration success or error
        @if(Session::has('successReg'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ Session::get('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        @elseif(Session::has('errorReg'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ Session::get('error') }}',
            });
        @endif
    </script>
@endsection