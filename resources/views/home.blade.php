@extends('layout')
@section('title', 'Home')
@include('include.doctor.docnav')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column p-3" style="width: 250px; height: 100vh; background-color: #ffffff; margin-top: 40px;">
            <div class="mb-auto">
                <a href="{{ url('/home') }}" class="btn d-flex align-items-center mb-2" style="background-color: #3cb4fc; border-color: #3cb4fc; color: #ffffff; text-align: left;">
                    <i class="fas fa-home me-2"></i>
                    Home
                </a>
                <a href="{{ url('/students') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-user me-2"></i>
                    Students
                </a>
            </div>
        </div>
        <div class="col-9">
            <h1 class="text-center">Welcome to the dashboard</h1>
            <!-- Add other content for the home page here -->
        </div>
    </div>
</div>
@endsection
