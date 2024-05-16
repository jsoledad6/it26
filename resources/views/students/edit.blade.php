@extends('layout')
@section('title', 'Home')
@include('include.doctor.docnav')

@section('content')
<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Student</div>
</div>
<div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                    <h1 class="text-center mb-5">Edit Student</h1>
                    <form action="{{ url('/students') }}" method="post">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="ID Number" name="studID" value="{{$students->studID}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="First Name" name="studFirstName" value="{{$students->studFirstName}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="MiddleName" name="studMiddleName" value="{{$students->studMiddleName}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Last Name" name="studLastName" value="{{$students->studLastName}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Age" name="studAge" value="{{$students->studAge}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Gender" name="studGender" value="{{$students->studGender}}">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control my-3 py-2" placeholder="Email" name="studEmail" value="{{$students->studEmail}}">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control my-3 py-2" placeholder="Contact Number" name="studContact" value="{{$students->studContact}}">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop