<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ALoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminLoginController extends Controller
{
    public function showLoginForm(): View
    {
        return view('admin.login');
    }

    public function store(ALoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $user = Auth::guard('admin')->user();
        Auth::guard('admin')->login($user, $request->boolean('remember'));
        $request->session()->regenerate();
        $request->session()->put('_guard', 'admin');
        // dd($request->all());
        return redirect(route('admin.dashboard'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
