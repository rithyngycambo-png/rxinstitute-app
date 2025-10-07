@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('enrollments/' . $enrollments->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" value="{{ $enrollments->id }}" />

                <label>EnrollID</label><br>
                <input type="text" name="enrollID" value="{{ $enrollments->enrollID }}" class="form-control"><br>

                <label>DepartmentID</label><br>
                <input type="text" name="departmentID" value="{{ $enrollments->departmentID }}" class="form-control"><br>

                <label>StudentID</label><br>
                <input type="text" name="studentID" value="{{ $enrollments->studentID }}" class="form-control"><br>

                <label>Join Date</label><br>
                <input type="text" name="joinDate" value="{{ $enrollments->joinDate }}" class="form-control"><br>

                <label>Fee</label><br>
                <input type="text" name="fee" value="{{ $enrollments->fee }}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@endsection