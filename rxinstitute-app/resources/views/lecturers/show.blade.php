@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Lecturers Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $lecturers->name }}</h5>
                <p class="card-text">Address : {{ $lecturers->address }}</p>
                <p class="card-text">Mobile : {{ $lecturers->mobile }}</p>
            </div>

            </hr>

        </div>
    </div>

@endsection