@extends('layout')
@section('title', 'Create Diagnosis')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($diagnosis) ? 'Edit' : 'Create' }} Diagnosis</div>
                <div class="card-body">
                    <form action="{{ route('diagnoses.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="student_id" value="{{ $student_id }}">
                        <div class="mb-3">
                            <label for="condition" class="form-label">Condition</label>
                            <input type="text" class="form-control" id="condition" name="condition" value="{{ $diagnosis->condition ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ $diagnosis->description ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($diagnosis) ? 'Update' : 'Save' }} Diagnosis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
