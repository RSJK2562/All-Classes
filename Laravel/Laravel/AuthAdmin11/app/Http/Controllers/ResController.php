<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResController extends Controller
{
    public function adminLogin()
    {
        return view('admin.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/AdminPanel');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.profile', compact('profileData'));
    }

    public function profileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        // if ($request->file('photo')) {
        //     $file = $request->file('photo');
        //     @unlink(public_path('backend/assets/upload/admin_img/' . $data->photo));
        //     $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

        //     $file->move(public_path('backend/assets/upload/admin_img/'), $fileName);
        //     $data['photo'] = $fileName;
        // }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Update Successfully',
            'alert-type' => 'success',

        );

        return back()->with($notification);
    }

    public function setting()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.setting', compact('profileData'));
    }

    public function updatePassword(Request $request)
    {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            $notification = array(
                'message' => 'Old Password Does Not Match!',
                'alert-type' => 'error',

            );
            return back()->with($notification);
        }

        // Update new password
        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with([
            'message' => 'Password updated successfully!',
            'alert-type' => 'success',
        ]);
    }
}
