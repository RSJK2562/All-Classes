<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyController extends Controller
{
    public function dashboard()
    {
        return view('sms.dashboard');
    }

    public function smsProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('sms.profile', compact('profileData'));
    }

    public function smsStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->save();

        return back()->with('success', 'SMS Profile Update');
    }

    public function changepassword()
    {
        return view('sms.change-password');
    }

    public function passwordUpdate(Request $request)
    {
        if (!Hash::check($request->old_pwd, auth()->user()->password)) {
            $type = 'error';
            $msg = 'Old Password Does Not Match!';
        } else {
            if ($request->new_pwd != $request->con_pwd) {
                $type = 'error';
                $msg = 'New and Confirm Password Not Match';
            } else {
                User::find(auth()->user()->id)->update([
                    'password' => Hash::make($request->new_pwd)
                ]);
                $type = 'success';
                $msg = 'Password changed successfully';
            }
        }
        return back()->with($type, $msg);
    }

    public function SmsLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
