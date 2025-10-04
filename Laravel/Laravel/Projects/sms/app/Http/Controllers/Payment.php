<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Payment as ModelsPayment;
use Illuminate\Http\Request;

class Payment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = ModelsPayment::all();
        return view('sms.payments.index')->with('payment', $payment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment = Enroll::pluck('enroll_no', 'id');
        return view('sms.payments.add', compact('payment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        ModelsPayment::create($input);
        return back()->with('success', 'Payment Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = ModelsPayment::find($id);
        return view('sms.payments.show')->with('payment', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = ModelsPayment::find($id);
        $enroll = Enroll::pluck('enroll_no', 'id');
        // dd($payment);    
        return view('sms.payments.edit', compact('payment', 'enroll'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = ModelsPayment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('/payments')->with('success', 'Payment Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelsPayment::destroy($id);
        return redirect('/payments')->with('error', 'Payment Delete.');
    }
}
