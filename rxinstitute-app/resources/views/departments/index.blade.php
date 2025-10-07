@extends('layout') <!-- Extending the layout file for consistent design -->

@section('content') <!-- Defining the content section to be injected into the layout -->

    <div class="card">
        <div class="card-header">
            <h2>Departments Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/departments/create') }}" class="btn btn-success btn-sm" title="Add New Department">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Syllabus</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->syllabus }}</td>
                                <td>{{ $item->duration }}</td>
                                <td>
                                    <a href="{{ url('/departments/' . $item->id) }}" title="View Department">
                                        <button class="btn btn-info btn-sm">View</button>
                                    </a>
                                    <a href="{{ url('/departments/' . $item->id . '/edit') }}" title="Edit Department">
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                    <form method="POST" action="{{ url('/departments/' . $item->id) }}" accept-charset="UTF-8"
                                        style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Department"
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