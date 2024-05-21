@extends('layout')
@section('title', 'Doctors')
@include('include.doctor.adminnav')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column p-3" style="width: 250px; height: 100vh; background-color: #ffffff; margin-top: 40px;">
            <div class="mb-auto">
                <a href="{{ route('admin') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-home me-2"></i>
                    Home
                </a>
                <a href="{{ route('admin.students.index') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-user me-2"></i>
                    Students
                </a>
                <a href="{{ route('admin.doctors.index') }}" class="btn d-flex align-items-center mb-2" style="background-color: #3cb4fc; border-color: #3cb4fc; color: #ffffff; text-align: left;">
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
                            <a href="{{ route('admin.doctors.create') }}" class="btn btn-color btn-sm float-end">Add New Doctor</a>
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
                                            <th>Actions</th>
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
                                            <td>
                                                <a href="{{ route('admin.doctors.show', $doctor->id) }}" title="View">
                                                    <button class="btn btn-color btn-sm"><i class="fas fa-eye"></i></button>
                                                </a>
                                                <a href="{{ route('admin.doctors.edit', $doctor->id) }}" title="Edit">
                                                    <button class="btn btn-color btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                                </a>
                                                <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-color btn-sm" onclick="return confirm('Are you sure you want to delete this doctor?')"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
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
