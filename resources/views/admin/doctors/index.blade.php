@extends('layout')
@section('title', 'Doctors')
@include('include.doctor.adminnav')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column p-3" style="width: 250px; height: 100vh; background-color: #ffffff; margin-top: 40px;">
            <div class="mb-auto">
                <a href="{{ url('/admin') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-home me-2"></i>
                    Home
                </a>
                <a href="{{ url('/admin/students') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-user me-2"></i>
                    Students
                </a>
                <a href="{{ url('/admin/doctors') }}" class="btn d-flex align-items-center mb-2" style="background-color: #3cb4fc; border-color: transparent; color: #ffffff; text-align: left;">
                    <i class="fas fa-user-md me-2"></i>
                    Doctors
                </a>
            </div>
        </div>

        <div class="col">
            <div class="row" style="margin: 20px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Doctor Table</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Contact</th>
                                            <th>Job Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($doctors as $doctor)
                                        <tr>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->gender }}</td>
                                            <td>{{ $doctor->birthday }}</td>
                                            <td>{{ $doctor->contact }}</td>
                                            <td>{{ $doctor->job_description }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
