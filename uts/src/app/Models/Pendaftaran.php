<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans';

    protected $fillable = [
        'user_id',
        'beasiswa_id',
        'tanggal_daftar',
        'status',
    ];

    /**
     * Relasi ke model Mahasiswa
     * Pendaftaran ini dimiliki oleh satu mahasiswa
     */
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'user_id');
    }

    /**
     * Relasi ke model Beasiswa
     * Pendaftaran ini berkaitan dengan satu beasiswa
     */
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
}
