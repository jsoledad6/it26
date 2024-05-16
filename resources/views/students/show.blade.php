@extends('layout')
@section('title', 'Home')
@include('include.doctor.docnav')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{$students->studFirstName}}</h5>
        <p class="card-text">ID Number : {{ $students->studID }}</p>
        <p class="card-text">Email : {{ $students->studEmail }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection