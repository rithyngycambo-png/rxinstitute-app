@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 95vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0 rounded-4" style="width: 700px;">
            <div class="card-header text-white text-center fw-bold fs-5" style="background-color: #0B1E53;">
                ✏️ Edit Enrollment
            </div>

            <div class="card-body p-4">

                <!-- {{-- Validation Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->

                {{-- Enrollment Edit Form --}}
                <form action="{{ url('enrollments/' . $enrollments->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="id" value="{{ $enrollments->id }}" />

                    <div class="mb-3">
                        <label for="enrollNo" class="form-label fw-semibold">Enrollment Number</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-hash text-primary"></i>
                            </span>
                            <input type="text" name="enrollNo" id="enrollNo" class="form-control form-control-lg"
                                value="{{ $enrollments->enrollNo }}" placeholder="Enter enrollment ID" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="studentID" class="form-label fw-semibold">Student ID</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-person-fill text-success"></i>
                            </span>
                            <input type="text" name="studentID" id="studentID" class="form-control form-control-lg"
                                value="{{ $enrollments->studentID }}" placeholder="Enter student ID" required>
                        </div>
                        {{-- show validation message below the field --}}
                        @error('studentID')
                            <div class="invalid-feedback d-block">
                                ⚠️ {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="departmentID" class="form-label fw-semibold">Department</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-building text-warning"></i>
                            </span>
                            <select name="departmentID" id="departmentID" class="form-select form-select-lg" required>
                                @foreach ($departments as $id => $name)
                                    <option value="{{ $id }}" {{ $id == $enrollments->departmentID ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="joinDate" class="form-label fw-semibold">Join Date</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-calendar-date text-danger"></i>
                            </span>
                            <input type="date" name="joinDate" id="joinDate" class="form-control form-control-lg"
                                value="{{ $enrollments->joinDate }}" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="fee" class="form-label fw-semibold">Enrollment Fee</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-cash-stack text-success"></i>
                            </span>
                            <input type="text" name="fee" id="fee" class="form-control form-control-lg"
                                value="{{ $enrollments->fee }}" placeholder="Enter total fee" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white px-5 py-2 fw-semibold">
                            <i class="bi bi-pencil-square me-2"></i> Update Enrollment
                        </button>
                        <a href="{{ url('enrollments') }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                            <i class="bi bi-arrow-left"></i> Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection