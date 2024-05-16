@extends('layout')
@section('title', 'Home')
@include('include.navbar')
@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <h1>Welcome!</h1>
            <p class="lead mt-3">School Clinic Management System.</p>
            <a href="{{ route('login') }}" class="btn btn-color mt-3 btn-lg">Login</a>
        </div>
    </div>
</div>
@endsection