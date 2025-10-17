@extends('layout')

@section('content')
    <style>
        /* === Lecturer Page Styling === */

        .table-scroll {
            max-height: 560px;
            overflow-y: auto;
            margin-top: 0;
            border-radius: 10px;
        }

        /* Fix both page header and table header */
        .sticky-header {
            position: sticky;
            top: 0;
            background: #ffffff;
            z-index: 20;
            padding: 15px 10px;
            border-bottom: 2px solid #eee;
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .page-header h2 {
            font-weight: 700;
            color: #1e1b7a;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .page-header img {
            width: 45px;
            height: 45px;
            object-fit: cover;
        }

        .add-btn {
            background-color: #28a745;
            border: none;
            padding: 8px 18px;
            font-size: 15px;
            border-radius: 6px;
            color: white;
            transition: background-color 0.3s ease;
        }

        .add-btn:hover {
            background-color: #218838;
        }

        .table-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 20px;
            animation: fadeIn 0.6s ease;
        }

        .table thead th {
            position: sticky;
            top: 0;
            background: linear-gradient(90deg, #1e1b7a, #2a248f);
            color: white;
            text-align: center;
            vertical-align: middle;
            z-index: 15;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table tbody tr:hover {
            background-color: #f7f8ff;
            transition: background-color 0.2s ease;
        }

        .btn {
            border-radius: 6px;
            padding: 5px 12px;
            font-size: 14px;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .table-scroll::-webkit-scrollbar {
            width: 8px;
        }

        .table-scroll::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }
    </style>

    <div class="table-card">
        <div class="page-header sticky-header">
            <h2>
                <img src="{{ asset('screenshorts/lecturer.png') }}" alt="Lecturer Logo">
                Lecturers Application
            </h2>
            <a href="{{ url('/lecturers/create') }}">
                <button class="add-btn">
                    <i class="fa fa-plus"></i> Add New
                </button>
            </a>
        </div>

        <div class="table-responsive table-scroll">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lecturers as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>
                                <a href="{{ url('/lecturers/' . $item->id) }}" title="View Lecturer">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                </a>
                                <a href="{{ url('/lecturers/' . $item->id . '/edit') }}" title="Edit Lecturer">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pen"></i></button>
                                </a>
                                <form method="POST" action="{{ url('/lecturers/' . $item->id) }}" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this lecturer?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection