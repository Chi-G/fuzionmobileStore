<?php

namespace App\Filament\Pages;

use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CustomLogin extends BaseLogin
{
    protected static string $guard = 'admin';

    public function authenticate(): ?LoginResponse
    {
        $formData = $this->form->getState();
        $credentials = [
            'email' => $formData['email'],
            'password' => $formData['password'],
        ];

        Log::info('Attempting admin login', [
            'raw_form_data' => $formData,
            'filtered_credentials' => $credentials,
            'guard_driver' => Auth::guard('admin')->getProvider() ? get_class(Auth::guard('admin')->getProvider()) : 'No provider',
        ]);

        $user = Auth::guard('admin')->getProvider()->retrieveByCredentials($credentials);
        if (!$user || !\Illuminate\Support\Facades\Hash::check($credentials['password'], $user->password)) {
            Log::warning('Admin login failed', ['email' => $credentials['email']]);
            throw \Illuminate\Validation\ValidationException::withMessages([
                'data.email' => __('filament-panels::pages/auth/login.messages.failed'),
            ]);
        }

        Log::info('User retrieved', [
            'user_id' => $user->id,
            'user_email' => $user->email,
        ]);

        Auth::guard('admin')->login($user, $formData['remember'] ?? false);
        $loggedInUser = Auth::guard('admin')->user();

        Log::info('Admin login successful', [
            'email' => $credentials['email'],
            'user_id' => $loggedInUser->id,
        ]);

        session()->regenerate();
        session()->put('guard', 'admin');

        Log::info('Session after login', ['session' => session()->all()]);

        return app(\Filament\Http\Responses\Auth\LoginResponse::class);
    }
}
