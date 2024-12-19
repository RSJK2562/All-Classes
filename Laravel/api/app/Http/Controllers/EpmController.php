<?php

namespace App\Http\Controllers;

use App\Models\ApiModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EpmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $EmpData =  ApiModal::all();
        return response()->json($EmpData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $rules = array(
            'name' => 'required | min:3 | max:10',
            'email' => 'required | email | max:255',
            'mobile' => 'required | string | max:10',
            'password' => 'required | string | min:6',

        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            $data = [
                'status' => 406, //Not Acceptable
                'msg' => $validation->errors(),
                'data' => $rules
            ];
        } else {
            $tbl = ApiModal::where('email', $request->email)
                ->orWhere('mobile', $request->mobile)
                ->first();
            if (!$tbl) {
                $tbl = new ApiModal();
                $tbl->name = $request->name;
                $tbl->email = $request->email;
                $tbl->mobile = $request->mobile;
                $tbl->password = $request->password;
                $tbl->save();
                $last_rec_id = $tbl->id;
                $res = ApiModal::find($last_rec_id);
                $data = [
                    'status' => 201,  //Created
                    'msg' => 'Employee all Successfully',
                    'data' => $res
                ];
            } else {
                $data = [
                    'status' => 409,
                    'msg' => 'Data already exists',
                    'data' => $tbl
                ];
            }
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
