<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MyStudent extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student = Student::all();
        $student = Student::orderBy('id', 'desc')->get();
        return view('sms.student.index')->with('students', $student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sms.student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        Student::create($input);
        return back()->with('success', 'Student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('sms.student.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('sms.student.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        // dd($student);
        $input = $request->all();
        $student->update($input);
        return redirect('/students')->with('success', 'Student data updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect('/students')->with('error', 'Student deleted!');
    }
}
