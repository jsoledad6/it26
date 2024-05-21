@extends('layout')
@section('title', 'Home')
@include('include.doctor.adminnav')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Vertical buttons sidebar -->
        <div class="d-flex flex-column p-3" style="width: 250px; height: 100vh; background-color: #ffffff; margin-top: 40px;">
            <div class="mb-auto">
                <a href="{{ route('admin') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-home me-2"></i>
                    Home
                </a>
                <a href="{{ route('admin.students.index') }}" class="btn d-flex align-items-center mb-2" style="background-color: #3cb4fc; border-color: #3cb4fc; color: #ffffff; text-align: left;">
                    <i class="fas fa-user me-2"></i>
                    Students
                </a>
                <a href="{{ url('/admin/doctors') }}" class="btn d-flex align-items-center mb-2" style="background-color: transparent; border-color: transparent; color: #000000; text-align: left;">
                    <i class="fas fa-user-md me-2"></i>
                    Doctors
                </a>
            </div>
        </div>

        <!-- Main content area -->
        <div class="col">
            <div class="row" style="margin: 20px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2>Student Table</h2>
                            <form action="{{ url('/admin/students') }}" method="GET" class="d-flex" style="width: auto;">
                                <input type="text" name="search" class="form-control" placeholder="Search students" value="{{ request()->input('search') }}" style="width: 200px;">
                                <button type="submit" class="btn btn-color btn-sm ms-2">Search</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('admin.students.create') }}" class="btn btn-color btn-sm" title="Add New Student">
                                Add New
                            </a>
                            <br><br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>College</th>
                                            <th>Program</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->studID }}</td>
                                            <td>{{ $student->studFirstName }}</td>
                                            <td>{{ $student->studMiddleName }}</td>
                                            <td>{{ $student->studLastName }}</td>
                                            <td>{{ $student->studAge }}</td>
                                            <td>{{ $student->studGender }}</td>
                                            <td>{{ $student->studCollege }}</td>
                                            <td>{{ $student->studProgram }}</td>
                                            <td>
                                                <a href="{{ route('admin.students.show', $student->id) }}" title="View Student">
                                                    <button class="btn btn-color btn-sm"><i class="fas fa-eye"></i></button>
                                                </a>
                                                <a href="{{ route('diagnoses.create', $student->id) }}" title="Add Diagnosis">
                                                    <button class="btn btn-color btn-sm"><i class="fas fa-file-medical"></i></button>
                                                </a>
                                                <a href="{{ route('admin.students.edit', $student->id) }}" title="Edit Student">
                                                    <button class="btn btn-color btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- End table responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End col -->
    </div>
</div>
@endsection
