<?php

namespace App\Http\Controllers;
use App\Http\Requests\EnrollmentRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Enrollment;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\view\view;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $enrollments = Enrollment::all(); /* Fetch all Enrollment from the database */
        return view('enrollments.index')->with('enrollments', $enrollments); /* Return the view with the list of Departments */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $departments = Department::pluck('name', 'id'); /* Fetch all departments for the dropdown */
        return view('enrollments.create', compact('departments')); /* Return the view to create a new Lecturer */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnrollmentRequest $request): RedirectResponse
    {
        // $input = $request->all(); /* Get all input data from the request */
        Enrollment::create($request->validated()); /* Create a new Enrollment record in the database */
        return redirect('/enrollments')->with('flash_message', 'Enrollment Added!'); /* Redirect to the Lecturers list with a flash message */

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $enrollments = Enrollment::findOrFail($id); /* Find the Enrollment by ID */
        return view('enrollments.show')->with('enrollments', $enrollments); /* Return the view with the Department details */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $enrollment = Enrollment::find($id);
        // return view('enrollments.edit')->with('enrollments', $enrollment); /* Return the view to edit the Lecturer */
        // catch the data from the database to show on the form edit
        $enrollments = Enrollment::findOrFail($id);
        $departments = Department::pluck('name', 'id'); // Fetch list of departments

        return view('enrollments.edit', compact('enrollments', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnrollmentRequest $request, string $id): RedirectResponse
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($request->validated());
        return redirect('/enrollments')->with('flash_message', 'Enrollment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}
