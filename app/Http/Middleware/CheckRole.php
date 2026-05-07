<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     * Usage: Route::middleware('role:admin') atau 'role:admin,parent'
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        if (!in_array($userRole, $roles)) {
            // Redirect ke dashboard sesuai role user yang sedang login
            return match ($userRole) {
                'admin'     => redirect()->route('admin.dashboard'),
                'parent'    => redirect()->route('parent.dashboard'),
                'caregiver' => redirect()->route('caregiver.dashboard'),
                default     => redirect()->route('login'),
            };
        }

        return $next($request);
    }
}
