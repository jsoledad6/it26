@extends('layout')

@section('title', 'Edit Student')

@include('include.doctor.docnav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Edit Student</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.update', $students->id) }}" method="POST">
                        @csrf
                        @method("PATCH")

                        <div class="mb-3">
                            <label for="studID" class="form-label">ID Number</label>
                            <input id="studID" type="text" class="form-control" name="studID" value="{{ $students->studID }}" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="studFirstName" class="form-label">First Name</label>
                            <input id="studFirstName" type="text" class="form-control" name="studFirstName" value="{{ $students->studFirstName }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="studMiddleName" class="form-label">Middle Name</label>
                            <input id="studMiddleName" type="text" class="form-control" name="studMiddleName" value="{{ $students->studMiddleName }}">
                        </div>

                        <div class="mb-3">
                            <label for="studLastName" class="form-label">Last Name</label>
                            <input id="studLastName" type="text" class="form-control" name="studLastName" value="{{ $students->studLastName }}" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="studYear" class="form-label">Year Level</label>
                                <input id="studYear" type="text" class="form-control" name="studYear" value="{{ $students->studYear }}" required>
                            </div>
                            <div class="col">
                                <label for="studCollege" class="form-label">College</label>
                                <input id="studCollege" type="text" class="form-control" name="studCollege" value="{{ $students->studCollege }}" required>
                            </div>
                            <div class="col">
                                <label for="studProgram" class="form-label">Program</label>
                                <input id="studProgram" type="text" class="form-control" name="studProgram" value="{{ $students->studProgram }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="studAge" class="form-label">Age</label>
                                <input id="studAge" type="text" class="form-control" name="studAge" value="{{ $students->studAge }}" required>
                            </div>
                            <div class="col">
                                <label for="studGender" class="form-label">Gender</label>
                                <select class="form-select" id="studGender" name="studGender" required>
                                    <option value="" disabled>Choose gender...</option>
                                    <option value="Male" {{ $students->studGender === 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $students->studGender === 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="LGBTQ+" {{ $students->studGender === 'LGBTQ+' ? 'selected' : '' }}>LGBTQ+</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="studEmail" class="form-label">Email</label>
                                <input id="studEmail" type="email" class="form-control" name="studEmail" value="{{ $students->studEmail }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="studContact" class="form-label">Contact Number</label>
                            <input id="studContact" type="text" class="form-control" name="studContact" value="{{ $students->studContact }}" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
