@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Enrollment Details</div>
        <div class="card-body">

            <h5 class="card-title">Enroll ID: {{ $enrollments->enrollID }}</h5>
            <p class="card-text">Department ID: {{ $enrollments->departmentID }}</p>
            <p class="card-text">Student ID: {{ $enrollments->studentID }}</p>
            <p class="card-text">Join Date: {{ $enrollments->joinDate }}</p>
            <p class="card-text">Fee: {{ $enrollments->fee }}</p>

        </div>
    </div>

@endsection