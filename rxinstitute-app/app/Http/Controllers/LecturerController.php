<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LecturerRequest;
use Illuminate\Http\Response;
use App\Models\Lecturer;
use Illuminate\view\view;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lecturers = Lecturer::all(); /* Fetch all Lecturers from the database */
        return view('lecturers.index')->with('lecturers', $lecturers); /* Return the view with the list of Lecturers */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('lecturers.create'); /* Return the view to create a new Lecturer */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LecturerRequest $request): RedirectResponse
    {

        Lecturer::create($request->validated()); // Use validated data only
        return redirect('/lecturers')->with('flash_message', 'Lecturer Added!');
    }

    /**
     * Display the specified resource.
     */
    // view Button Section 
    public function show(string $id): View
    {
        $lecturers = Lecturer::find($id); /* Find the Lecturer by ID */
        return view('lecturers.show')->with('lecturers', $lecturers); /* Return the view with the Lecturer details */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $lecturer = Lecturer::find($id);
        return view('lecturers.edit')->with('lecturers', $lecturer); /* Return the view to edit the Lecturer */
        // catch the data from the database to show on the form edit    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LecturerRequest $request, string $id): RedirectResponse
    {
        $lecturer = Lecturer::findOrFail($id); // safer: throws 404 if not found
        $lecturer->update($request->validated()); // ✅ only update validated data

        return redirect('/lecturers')->with('flash_message', 'Lecturer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Lecturer::destroy($id);
        return redirect('lecturers')->with('flash_message', 'Lecturer deleted!');
    }
}
