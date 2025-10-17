<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StudentRequest;

use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\view\view;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all(); /* Fetch all students from the database */
        return view('students.index')->with('students', $students); /* Return the view with the list of students */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create'); /* Return the view to create a new student */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request): RedirectResponse
    {
        Student::create($request->validated()); // Only save validated data
        return redirect('/students')->with('flash_message', 'Student Added!');
    }

    /**
     * Display the specified resource.
     */
    // view Button Section 
    public function show(string $id): View
    {
        $students = Student::find($id); /* Find the student by ID */
        return view('students.show')->with('students', $students); /* Return the view with the student details */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student); /* Return the view to edit the student */
        // catch the data from the database to show on the form edit    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id): RedirectResponse
    {
        $student = Student::findOrFail($id); // safer than find(), throws 404 if not found
        $student->update($request->validated()); // ✅ only updates validated fields

        return redirect('/students')->with('flash_message', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}
