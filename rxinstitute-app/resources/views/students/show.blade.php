@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0 rounded-4" style="width: 600px;">
            <div class="card-header text-white text-center fw-bold fs-5" style="background-color: #0B1E53;">
                👩‍🎓 Student Details
            </div>

            <div class="card-body p-4">

                <div class="mb-3 text-center">
                    <i class="bi bi-person-circle" style="font-size: 4rem; color: #0B1E53;"></i>
                    <h4 class="mt-2 fw-bold text-dark">{{ $students->name }}</h4>
                    <hr class="w-50 mx-auto my-3">
                </div>

                <div class="px-3">
                    <p class="fs-6 mb-3">
                        <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                        <span class="fw-semibold">Address:</span> {{ $students->address }}
                    </p>
                    <p class="fs-6 mb-3">
                        <i class="bi bi-telephone-fill text-success me-2"></i>
                        <span class="fw-semibold">Mobile:</span> {{ $students->mobile }}
                    </p>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ url('students') }}" class="btn btn-outline-primary px-4 py-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to List
                    </a>
                    <a href="{{ url('students/' . $students->id . '/edit') }}"
                        class="btn btn-warning text-white px-4 py-2 ms-2">
                        <i class="bi bi-pencil-square me-1"></i> Edit Student
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection