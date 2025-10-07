<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\view\view;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $departments = Department::all(); /* Fetch all Department from the database */
        return view('departments.index')->with('departments', $departments); /* Return the view with the list of Departments */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('departments.create'); /* Return the view to create a new Lecturer */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse 
    {
        $input = $request->all(); /* Get all input data from the request */
        Department::create($input); /* Create a new Department record in the database */
        return redirect('/departments')->with('flash_message', 'Department Added!'); /* Redirect to the Lecturers list with a flash message */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $departments = Department::find($id); /* Find the Department by ID */
        return view('departments.show')-> with('departments', $departments); /* Return the view with the Department details */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $department = Department::find($id);
        return view('departments.edit')->with('departments', $department); /* Return the view to edit the Lecturer */
        // catch the data from the database to show on the form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $department = Department::find($id);
        $input = $request->all();
        $department->update($input);
        return redirect('departments')->with('flash_message', 'Department Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::destroy($id);
        return redirect('departments')->with('flash_message', 'Department deleted!');
    }
}
