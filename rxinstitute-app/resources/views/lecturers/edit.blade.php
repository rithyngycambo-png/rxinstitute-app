@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0 rounded-4" style="width: 600px;">
            <div class="card-header text-white text-center fw-bold fs-5" style="background-color: #0B1E53;">
                ✏️ Edit Lecturer
            </div>

            <div class="card-body p-4">

                {{-- Validation Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Lecturer Edit Form --}}
                <form action="{{ url('lecturers/' . $lecturers->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="id" id="id" value="{{ $lecturers->id }}">

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-person-fill text-primary"></i>
                            </span>
                            <input type="text" name="name" id="name" class="form-control form-control-lg"
                                value="{{ $lecturers->name }}" placeholder="Enter lecturer name" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label fw-semibold">Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-geo-alt-fill text-danger"></i>
                            </span>
                            <input type="text" name="address" id="address" class="form-control form-control-lg"
                                value="{{ $lecturers->address }}" placeholder="Enter lecturer address" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="mobile" class="form-label fw-semibold">Mobile Number</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-telephone-fill text-success"></i>
                            </span>
                            <input type="text" name="mobile" id="mobile" class="form-control form-control-lg"
                                value="{{ $lecturers->mobile }}" placeholder="Enter lecturer mobile number" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white px-5 py-2 fw-semibold">
                            <i class="bi bi-pencil-square me-2"></i> Update Lecturer
                        </button>
                        <a href="{{ url('lecturers') }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                            <i class="bi bi-arrow-left"></i> Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection