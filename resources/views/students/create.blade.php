@extends('layout')
@section('title', 'Home')
@include('include.doctor.docnav')

@section('content')
<div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                    <h1 class="text-center mb-5">Add Student</h1>
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="ID Number" name="studID">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="First Name" name="studFirstName">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="MiddleName" name="studMiddleName">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Last Name" name="studLastName">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Age" name="studAge">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Gender" name="studGender">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control my-3 py-2" placeholder="Email" name="studEmail">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Contact Number" name="studContact">
                        </div>
                        <div class="mb-4">
                        <button type="submit" class="btn btn-color">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop