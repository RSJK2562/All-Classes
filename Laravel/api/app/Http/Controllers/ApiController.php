<?php

namespace App\Http\Controllers;

use App\Models\ApiModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    function getList()
    {
        $EmpData =  ApiModal::all();
        return response()->json($EmpData);
    }

    function setdata(Request $req)
    {
        // validation
        $rules = array(
            'name' => 'required | min:3 | max:10',
            'email' => 'required | email | max:255',
            'mobile' => 'required | string | max:10',
            'password' => 'required | string | min:6',

        );
        $validation = Validator::make($req->all(), $rules);
        if ($validation->fails()) {
            $data = [
                'status' => 406, //Not Acceptable
                'msg' => $validation->errors(),
                'data' => $rules
            ];
        } else {
            // $tbl = ApiModal::where('email', $req->email)->first();
            // $tbl = ApiModal::where([['email', $req->email], ['mobile', $req->mobile]])->first();
            $tbl = ApiModal::where('email', $req->email)
                ->orWhere('mobile', $req->mobile)
                ->first();
            if (!$tbl) {
                $tbl = new ApiModal();
                $tbl->name = $req->name;
                $tbl->email = $req->email;
                $tbl->mobile = $req->mobile;
                $tbl->password = $req->password;
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
        // return response()->json($last_rec_id);
    }

    function updateData(Request $request)
    {
        $tbl = ApiModal::find($request->id);
        if (!$tbl) {
            $data = [
                'status' => 204, //No Content
                'msg' => 'Employee data not found',
            ];
        } else {
            $tbl->name = $request->name;
            $tbl->email = $request->email;
            $tbl->mobile = $request->mobile;
            $tbl->password = !empty($request->password) ? $request->password : $tbl->password;
            $tbl->save();
            $data = [
                'status' => 200, //Request was successful.
                'msg' => 'Employee data updated successfully',
                'data' => $tbl
            ];
        }
        return response()->json($data);
    }

    function deleteData($id)
    {
        // return $id;
        $tbl = ApiModal::destroy($id);
        if (!$tbl) {
            $data = [
                'status' => 204, //No Content
                'msg' => 'Employee data not found',
            ];
        } else {
            $data = [
                'status' => 200, //Request was successful.
                'msg' => 'Employee data delete successfully',
            ];
        }
        return response()->json($data);
    }

    function searchData($name)
    {
        // return $name;
        $tbl = ApiModal::where('name', 'like', "%$name%")->get();
        if (!$tbl) {
            $data = [
                'status' => 204, //No Content
                'msg' => 'Employee data not found'
            ];
        } else {
            $data = [
                'status' => 200, //Request was successful.
                'msg' => 'Employee data found',
                'data' => $tbl
            ];
        }
        return response()->json($data);
    }
}
