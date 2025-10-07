@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('departments/' . $departments->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$departments->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$departments->name}}" class="form-control"></br>
                <label>Syllabus</label></br>
                <input type="text" name="syllabus" id="syllabus" value="{{$departments->syllabus}}" class="form-control"></br>
                <label>Duration</label></br>
                <input type="text" name="duration" id="duration" value="{{$departments->duration}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@endsection