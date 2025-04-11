<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Password;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
        $token = app('auth.password.broker')->createToken($user);
        $notification = new \Filament\Notifications\Auth\ResetPassword($token);
        $notification->url = \Filament\Facades\Filament::getResetPasswordUrl($token, $user);
        $user->notify($notification);
        // Password::sendResetLink(
        //     ['email' => $user->email]
        // );
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
