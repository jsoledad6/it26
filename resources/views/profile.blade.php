<!-- resources/views/profile.blade.php -->
@extends('layout')
@section('title', 'Profile')
@include('include.doctor.docnav')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    User Profile
                    <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Name: {{ auth()->user()->name }}</h5>
                        <p class="card-text">Email: {{ auth()->user()->email }}</p>
                        <p class="card-text">Role: {{ auth()->user()->role }}</p>
                        <p class="card-text">Gender: {{ auth()->user()->gender }}</p>
                        <p class="card-text">Birthday: {{ auth()->user()->birthday }}</p>
                        <p class="card-text">Contact: {{ auth()->user()->contact }}</p>
                        <p class="card-text">Job Description: {{ auth()->user()->job_description }}</p>
                    </div>

                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
