@extends('layout')
@section('title', 'Home')
@include('include.doctor.docnav')

@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Student Table</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        Add New
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Actions</th> <!-- Add this header for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student) <!-- Correct variable name -->
                                <tr>
                                    <td>{{ $student->id }}</td> <!-- Assuming your primary key column is id -->
                                    <td>{{ $student->studFirstName }}</td>
                                    <td>{{ $student->studMiddleName }}</td>
                                    <td>{{ $student->studLastName }}</td>
                                    <td>{{ $student->studAge }}</td>
                                    <td>{{ $student->studGender }}</td>
                                    <td>{{ $student->studEmail }}</td>
                                    <td>{{ $student->studContact }}</td>
                                    <td>
                                        <a href="{{ route('students.show', $student->id) }}" title="View Student">
                                            <button class="btn btn-color btn-sm">View</button>
                                        </a>
                                        <a href="{{ route('students.edit', $student->id) }}" title="Edit Student">
                                            <button class="btn btn-color btn-sm">Edit</button>
                                        </a>
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
@endsection
