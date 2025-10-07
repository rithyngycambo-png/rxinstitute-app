@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Departments Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $departments->name }}</h5>
                <p class="card-text">Address : {{ $departments->syllabus }}</p>
                <p class="card-text">Mobile : {{ $departments->duration }}</p>
            </div>

            </hr>

        </div>
    </div>

@endsection