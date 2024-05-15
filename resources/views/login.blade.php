@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                    <h1 class="text-center mb-5">Login</h1>
                    @if(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <form action="{{route('login.post')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="email" class="form-control my-3 py-2" id="InputEmail" placeholder="Email" name="email">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control my-3 py-2" id="InputPassword" placeholder="Password" name="password">
                        </div>
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-info">Login</button>
                        </div>
                        <div class="text-center">
                        <p>Don't have an account? <a href="/register" class="signup-link"> Register</a></p>
                        </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection