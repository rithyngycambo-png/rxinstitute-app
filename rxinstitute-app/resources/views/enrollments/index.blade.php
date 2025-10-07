@extends('layout') <!-- Extending the layout file for consistent design -->

@section('content') <!-- Defining the content section to be injected into the layout -->

    <div class="card">
        <div class="card-header">
            <h2>Enrollments Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>enrollID</th>
                            <th>departmentID</th>
                            <th>studentID</th>
                            <th>joinDate</th>
                            <th>fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->enrollID }}</td>
                                <td>{{ $item->departmentID }}</td>
                                <td>{{ $item->studentID }}</td>
                                <td>{{ $item->joinDate }}</td>
                                <td>{{ $item->fee }}</td>
                                <td>
                                    <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollment">
                                        <button class="btn btn-info btn-sm">View</button>
                                    </a>
                                    <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollment">
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                    <form method="POST" action="{{ url('/enrollments/' . $item->id) }}" accept-charset="UTF-8"
                                        style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment"
                                            onclick="return confirm('Confirm delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection