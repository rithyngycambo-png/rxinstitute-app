@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0 rounded-4" style="width: 700px;">
            <div class="card-header text-white text-center fw-bold fs-5" style="background-color: #0B1E53;">
                🧾 Enrollment Details
            </div>

            <div class="card-body p-4">

                <div class="mb-3 text-center">
                    <i class="bi bi-file-earmark-text-fill" style="font-size: 4rem; color: #0B1E53;"></i>
                    <h4 class="mt-2 fw-bold text-dark">Enrollment #{{ $enrollments->enrollNo }}</h4>
                    <hr class="w-50 mx-auto my-3">
                </div>

                <div class="px-3">
                    <p class="fs-6 mb-3">
                        <i class="bi bi-person-fill text-success me-2"></i>
                        <span class="fw-semibold">Student ID:</span> {{ $enrollments->studentID }}
                    </p>

                    <p class="fs-6 mb-3">
                        <i class="bi bi-building text-primary me-2"></i>
                        <span class="fw-semibold">Department ID:</span> {{ $enrollments->departmentID }}
                    </p>

                    <p class="fs-6 mb-3">
                        <i class="bi bi-calendar-date text-danger me-2"></i>
                        <span class="fw-semibold">Join Date:</span> {{ $enrollments->joinDate }}
                    </p>

                    <p class="fs-6 mb-3">
                        <i class="bi bi-cash-stack text-success me-2"></i>
                        <span class="fw-semibold">Fee:</span> ${{ $enrollments->fee }}
                    </p>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ url('enrollments') }}" class="btn btn-outline-primary px-4 py-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to List
                    </a>
                    <a href="{{ url('enrollments/' . $enrollments->id . '/edit') }}"
                        class="btn btn-warning text-white px-4 py-2 ms-2">
                        <i class="bi bi-pencil-square me-1"></i> Edit Enrollment
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection