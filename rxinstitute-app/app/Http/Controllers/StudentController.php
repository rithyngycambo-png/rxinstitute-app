<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;  
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
    public function store(Request $request): RedirectResponse 
    {
        $input = $request->all(); /* Get all input data from the request */
        Student::create($input); /* Create a new student record in the database */
        return redirect('/students')->with('flash_message', 'Student Addedd!'); /* Redirect to the students list with a flash message */
    }

    /**
     * Display the specified resource.
     */
    // view Button Section 
    public function show(string $id): View
    {
        $students = Student::find($id); /* Find the student by ID */
        return view('students.show')-> with('students', $students); /* Return the view with the student details */
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
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}
