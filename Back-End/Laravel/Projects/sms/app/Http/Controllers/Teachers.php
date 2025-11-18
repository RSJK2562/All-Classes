<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Teachers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student = Teacher::all();
        $student = Teacher::orderBy('id', 'desc')->get();
        return view('sms.teacher.index')->with('students', $student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sms.teacher.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        Teacher::create($input);
        return back()->with('success', 'Teacher Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::find($id);
        return view('sms.teacher.show')->with('teachers', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view('sms.teacher.edit')->with('teachers', $teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teachers = Teacher::find($id);
        // dd($teachers);
        $input = $request->all();
        $teachers->update($input);
        return redirect('/teachers')->with('success', 'Teacher data updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy($id);
        return redirect('/teachers')->with('error', 'Teacher deleted!');
    }
}
