<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class Courses extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('sms.courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sms.courses.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        // return redirect('/courses')->with('success', 'Course Added!');
        return back()->with('success', 'Course Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('sms.courses.show')->with('course', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        // dd($courses);
        return view('sms.courses.edit')->with('course', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('/courses')->with('success', 'Course Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('/courses')->with('error', 'Courses Delete');
    }
}
