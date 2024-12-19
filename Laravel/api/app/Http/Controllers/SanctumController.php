<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SanctumController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            $data = [
                'status' => 204,
                'msg' => 'Employee data not found',

            ];
        } else {
            $data = [
                'status' => 200,
                'msg' => 'Employee data found',
                'data' => $user->createToken('MyApp')->plainTextToken,
            ];
        }
        return response()->json($data);
    }


    public function signup(Request $request)
    {
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        if ($user) {
            $data = [
                'status' => 201,
                'msg' => 'User signup successfully',
                'data' => $user->createToken('MyApp')->plainTextToken,
            ];
        } else {
            $data = [
                'status' => 500,
                'msg' => 'Unable to signup user',
            ];
        }

        return response()->json($data);
    }
}
