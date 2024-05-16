@extends('layout')
@section('title', 'Home')
@include('include.doctor.docnav')
@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="d-flex flex-column p-3" style="width: 250px; height: 100vh; background-color: #ffffff; margin-top: 40px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link active" aria-current="page">
                Home
            </a>
        </li>
        <li>
            <a href="{{ url('/students') }}" class="nav-link link-dark">
                Students
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                Diagnosis
            </a>
        </li>
    </ul>
</div>
        <div class="col-9">
            <h1>Welcome to the dashboard</h1>
            <!-- Add other content for the home page here -->
        </div>
    </div>
</div>
@endsection