<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SessionTimeoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $timeout = 5)
    {
        $userLastActivity = Session::get('last_activity');

        $userRole = Auth::user()->role;

        if ($userLastActivity && time() - $userLastActivity > $timeout * 60) {
            Session::flush();
            return redirect()->route('login')->with('error', 'Votre session a expiré en raison d\'inactivité.');
        }

        Session::put('last_activity', time());

        if ($userRole === 'admin') {
            // Redirect admin to admin blade
            return redirect()->route('dashboard');
        } else {
            // Redirect other users to user blade
            return redirect()->route('user.index');
        }

        return $next($request);
    }
}
