@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0 rounded-4" style="width: 600px;">
            <div class="card-header text-white text-center fw-bold fs-5" style="background-color: #0B1E53;">
                🏫 Department Details
            </div>

            <div class="card-body p-4">

                <div class="mb-3 text-center">
                    <i class="bi bi-building" style="font-size: 4rem; color: #0B1E53;"></i>
                    <h4 class="mt-2 fw-bold text-dark">{{ $departments->name }}</h4>
                    <hr class="w-50 mx-auto my-3">
                </div>

                <div class="px-3">
                    <p class="fs-6 mb-3">
                        <i class="bi bi-book text-success me-2"></i>
                        <span class="fw-semibold">Syllabus:</span> {{ $departments->syllabus }}
                    </p>

                    <p class="fs-6 mb-3">
                        <i class="bi bi-clock-history text-warning me-2"></i>
                        <span class="fw-semibold">Duration:</span> {{ $departments->duration }}
                    </p>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ url('departments') }}" class="btn btn-outline-primary px-4 py-2">
                        <i class="bi bi-arrow-left me-1"></i> Back to List
                    </a>
                    <a href="{{ url('departments/' . $departments->id . '/edit') }}"
                        class="btn btn-warning text-white px-4 py-2 ms-2">
                        <i class="bi bi-pencil-square me-1"></i> Edit Department
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection