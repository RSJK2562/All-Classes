<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        // Define roles mapping (e.g. role names to DB values)
        $roles = [
            'admin' => 0,
            'user'  => 1,
        ];

        if (isset($roles[$role]) && $user->role === $roles[$role]) {
            return $next($request);
        }

        // Redirect based on actual role
        return match ($user->role) {
            0 => redirect()->route('admin.dashboard'),
            1 => redirect()->route('admin.dashboard'),
            default => redirect()->route('login'), // fallback
        };
    }
}
