@extends('layout')
@section('title', 'Student Details')
@include('include.doctor.docnav')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Student Details</span>
                    <a href="{{ url('/students') }}" class="btn btn-sm btn-outline-secondary">&larr; Back</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title mb-3">Name: {{$students->studFirstName}} {{$students->studMiddleName}} {{$students->studLastName}}</h5>
                    <p class="card-text"><strong>Student ID:</strong> {{ $students->studID }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $students->studEmail }}</p>
                    <p class="card-text"><strong>College:</strong> {{ $students->studCollege }}</p>
                    <p class="card-text"><strong>Program:</strong> {{ $students->studProgram }}</p>
                    <p class="card-text"><strong>Year Level:</strong> {{ $students->studYear }}</p>
                    <p class="card-text"><strong>Age:</strong> {{ $students->studAge }}</p>
                    <p class="card-text"><strong>Gender:</strong> {{ $students->studGender }}</p>
                    <p class="card-text"><strong>Contact Number:</strong> {{ $students->studContact }}</p>
                    
                    <hr>
                    <h5 class="card-title mb-3">Diagnoses</h5>
                    @foreach ($students->diagnoses as $diagnosis)
                        <p class="card-text"><strong>Condition:</strong> {{ $diagnosis->condition }}</p>
                        <p class="card-text"><strong>Description:</strong> {{ $diagnosis->description }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
