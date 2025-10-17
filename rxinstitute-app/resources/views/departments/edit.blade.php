@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0 rounded-4" style="width: 600px;">
            <div class="card-header text-white text-center fw-bold fs-5" style="background-color: #0B1E53;">
                ✏️ Edit Department
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

                {{-- Department Edit Form --}}
                <form action="{{ url('departments/' . $departments->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="id" id="id" value="{{ $departments->id }}">

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Department Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-building text-primary"></i>
                            </span>
                            <input type="text" name="name" id="name" class="form-control form-control-lg"
                                value="{{ $departments->name }}" placeholder="Enter department name" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="syllabus" class="form-label fw-semibold">Syllabus</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-book text-success"></i>
                            </span>
                            <input type="text" name="syllabus" id="syllabus" class="form-control form-control-lg"
                                value="{{ $departments->syllabus }}" placeholder="Enter syllabus details" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="duration" class="form-label fw-semibold">Duration</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-clock-history text-warning"></i>
                            </span>
                            <input type="text" name="duration" id="duration" class="form-control form-control-lg"
                                value="{{ $departments->duration }}" placeholder="e.g., 4 Years / 8 Semesters" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white px-5 py-2 fw-semibold">
                            <i class="bi bi-pencil-square me-2"></i> Update Department
                        </button>
                        <a href="{{ url('departments') }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                            <i class="bi bi-arrow-left"></i> Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection