<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable implements FilamentUser
{
    use Notifiable, HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $primaryKey = 'id';

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
