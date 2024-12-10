<?php

namespace App\Http\Controllers;

use App\Models\Batche;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;

class Enrollment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enroll = Enroll::all();
        return view('sms.enrollment.index')->with('enroll', $enroll);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batche::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        return view('sms.enrollment.add', compact('batches', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enroll::create($input);
        return back()->with('success', 'Enrollment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $enroll = Enroll::find($id);
        return view('sms.enrollment.show')->with('enroll', $enroll);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batche::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        $enroll = Enroll::find($id);
        return view('sms.enrollment.edit')->with(['enroll' => $enroll, 'batches' => $batches, 'students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enroll = Enroll::find($id);
        $input = $request->all();
        $enroll->update($input);
        return redirect('/enrollments')->with('success', 'Enrollments Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enroll::destroy($id);
        return back()->with('error', 'Enrollment Delete');
    }
}
