<!-- resources/views/editprofile.blade.php -->
@extends('layout')
@section('title', 'Edit Profile')
@include('include.doctor.docnav')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Edit Profile
                    <a href="{{ url('/profile') }}" class="btn btn-sm btn-outline-secondary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <input id="role" type="text" class="form-control" name="role" value="{{ auth()->user()->role }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="" disabled>Choose gender...</option>
                                <option value="Male" {{ auth()->user()->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ auth()->user()->gender === 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="LGBTQ+" {{ auth()->user()->gender === 'LGBTQ+' ? 'selected' : '' }}>LGBTQ+</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input id="birthday" type="date" class="form-control" name="birthday" value="{{ auth()->user()->birthday }}">
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input id="contact" type="text" class="form-control" name="contact" value="{{ auth()->user()->contact }}">
                        </div>

                        <div class="mb-3">
                            <label for="job_description" class="form-label">Job Description</label>
                            <input id="job_description" type="text" class="form-control" name="job_description" value="{{ auth()->user()->job_description }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
