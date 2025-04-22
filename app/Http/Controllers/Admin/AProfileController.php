<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class AProfileController extends Controller
{
    /**
     * Display the admin's profile form.
     */
    public function edit()
    {
        return view('admin.profile', ['admin' => Auth::guard('admin')->user()]);
    }

    public function update(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $admin->id,
            'current_password' => 'nullable|string',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        try {
            $admin->name = $request->name;
            $admin->email = $request->email;

            if ($request->filled('password')) {
                if (!Hash::check($request->current_password, $admin->password)) {
                    return response()->json(['errors' => ['current_password' => ['Current password is incorrect.']]], 422);
                }
                $admin->password = Hash::make($request->password);
            }

            $admin->save();

            return response()->json(['message' => 'Profile updated successfully.']);
        } catch (\Exception $e) {
            Log::error('Admin profile update failed: ' . $e->getMessage());
            return response()->json(['errors' => ['general' => ['Failed to update profile.']]], 500);
        }
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $admin = Auth::guard('admin')->user();

        if (!Hash::check($request->password, $admin->password)) {
            return response()->json(['errors' => ['password' => ['Password is incorrect.']]], 422);
        }

        try {
            $admin->delete();
            Auth::guard('admin')->logout();
            return response()->json(['message' => 'Account deleted successfully.']);
        } catch (\Exception $e) {
            Log::error('Admin account deletion failed: ' . $e->getMessage());
            return response()->json(['errors' => ['general' => ['Failed to delete account.']]], 500);
        }
    }
}
