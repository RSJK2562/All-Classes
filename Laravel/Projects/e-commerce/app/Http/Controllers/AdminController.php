<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // admin/dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // admin/logout
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/apnaghar');
    }

    // users
    public function userlist()
    {
        // $user = User::all();
        $user = User::whereNot('role','admin')->get();

        return view('admin.userlist', compact('user'));
    }

}
