<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Users/Index', [
            // 'users' => User::all()
            'users' => User::with('roles')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return Inertia::render('Users/Create');
        return Inertia::render('Users/Create', [
            'roles' => Role::pluck('name')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
            'password' => 'required|string|min:8',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
        ]);

        // User::create($validated);
        $user = User::create([
            ...$request->only(['name', 'email']),
            'password' => Hash::make($request->password)
        ]);

        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Inertia::render('Users/Show', [
            'user' => User::findOrFail($id),
            'userRoles' => User::findOrFail($id)->roles->pluck('name'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return Inertia::render('Users/Edit', [
            'user' => $user,
            // 'userRoles' => User::findOrFail($id)->roles->pluck('name'),
            'userRoles' => $user->roles()->pluck('name'),
            'roles' => Role::pluck('name'),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
        ]);

        $user = User::findOrFail($id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        
        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
