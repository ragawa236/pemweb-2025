<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $guard_name = 'web';

    protected $table = 'mahasiswas';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'jurusan',
        'universitas',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi: Mahasiswa memiliki banyak pendaftarans
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class, 'user_id');
    }

    public function getFilamentName(): string
    {
        return $this->nama ?? 'Mahasiswa';
    }
}
