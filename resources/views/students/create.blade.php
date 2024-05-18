@extends('layout')
@section('title', 'Create Student')
@include('include.doctor.docnav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Student and Diagnosis</div>

                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf

                        <!-- Student fields -->
                        <div class="mb-3">
                            <input type="text" class="form-control" id="studID" name="studID" required placeholder="Student ID">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="studFirstName" name="studFirstName" required placeholder="First Name">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="studMiddleName" name="studMiddleName" placeholder="Middle Name">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="studLastName" name="studLastName" required placeholder="Last Name">
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="studYear" name="studYear" required placeholder="Year Level">
                            </div>

                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="studCollege" name="studCollege" required placeholder="College">
                            </div>

                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="studProgram" name="studProgram" required placeholder="Program">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="studAge" name="studAge" required placeholder="Age">
                            </div>

                            <div class="col-md-4 mb-3">
                                <select class="form-select" id="studGender" name="studGender" required>
                                    <option value="" selected disabled>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="LGBTQ+">LGBTQ+</option>
                                </select>
                            </div>

                            <div class="col-md-4 mb-3">
                                <input type="email" class="form-control" id="studEmail" name="studEmail" required placeholder="Email">
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="studContact" name="studContact" required placeholder="Contact Number">
                        </div>

                        <hr>

                        <h5>Diagnosis Information</h5>

                        <div class="mb-3">
                            <label for="condition" class="form-label">Condition</label>
                            <input type="text" class="form-control" id="condition" name="condition" required placeholder="Condition">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
