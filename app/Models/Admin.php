<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;

class Admin extends Authenticatable implements FilamentUser, HasName
{
    use Notifiable, HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'nama_admin',
        'email',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return true;
    }

    public function getFilamentName(): string
    {
        return $this->nama_admin;
    }

    public function floras()
    {
        return $this->hasMany(Flora::class, 'admin_id');
    }

    public function faunas()
    {
        return $this->hasMany(Fauna::class, 'admin_id');
    }
}