<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyNewController extends Controller
{
    public function save_emp(Request  $req)
    {
        $user = $req->user();
        dd($user);
    }
}
