<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class SetAdminSession
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('admin/*')) {
            Config::set('session.cookie', 'admin_session');
            Auth::shouldUse('admin');
            if ($request->session()->get('_guard') === 'admin' && !Auth::guard('admin')->check()) {
                $userId = $request->session()->get('login_admin_' . md5('admin'));
                if ($userId) {
                    Auth::guard('admin')->loginUsingId($userId);
                }
            }
        } else {
            Config::set('session.cookie', 'laravel_session');
            Auth::shouldUse('web');
        }
        return $next($request);
    }
}
