<?php

namespace App\Http\Controllers;

use App\Models\Batche;
use App\Models\Course;
use Illuminate\Http\Request;

class Batches extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batche::all();
        return view('sms.batches.index')->with('batch', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::pluck('name', 'id');
        // dd($course);
        return view('sms.batches.add', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batche::create($input);
        return back()->with('success', 'Batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches = Batche::find($id);
        return view('sms.batches.show')->with('batch', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::pluck('name', 'id');
        $batch = Batche::find($id);
        return view('sms.batches.edit')->with(['batch' => $batch, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch = Batche::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('/batches')->with('success', 'Batches Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batche::destroy($id);
        return redirect('/batches')->with('error', 'Batches Delete.');
    }
}
