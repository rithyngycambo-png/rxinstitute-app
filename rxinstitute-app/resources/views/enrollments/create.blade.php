@extends('layout')
@section('content')
<!-- Show form for student to input data into it. -->
<div class="card">
    <div class="card-header">Enrollments Page</div>
    <div class="card-body">

        <form action="{{ url('enrollments') }}" method="post">
            {!! csrf_field() !!}
            <label>EnrollID</label><br>
            <input type="text" name="enrollID" id="enrollID" class="form-control"><br>

            <label>DepartmentID</label><br>
            <input type="text" name="departmentID" id="departmentID" class="form-control"><br>

            <label>StudentID</label><br>
            <input type="text" name="studentID" id="studentID" class="form-control"><br>

            <label>Join Date</label><br>
            <input type="text" name="joinDate" id="joinDate" class="form-control"><br>

            <label>Fee</label><br>
            <input type="text" name="fee" id="fee" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>

    </div>
</div>

@stop
