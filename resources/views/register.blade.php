@extends('layout')
@section('title', 'Registration')
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
                    <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                        <input type="admin" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked name="admin">
                        <label class="btn btn-color" for="btnradio1">Admin</label>

                        <input type="doctor" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" name="doctor">
                        <label class="btn btn-color" for="btnradio2">Doctor</label>
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