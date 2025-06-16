<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswa';

    protected $fillable = [
        'nama',
        'deskripsi',
        'syarat',
        'deadline',
        'link_pendaftaran',
    ];

    protected $casts = [
        'deadline' => 'date',
    ];

    /**
     * Relasi: Beasiswa memiliki banyak pendaftarans
     */
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }

    /**
     * Aturan validasi (opsional - bisa dipakai di FormRequest)
     */
    public static function rules(): array
    {
        return [
            'nama'              => 'required|string|max:255',
            'deskripsi'         => 'required|string',
            'syarat'            => 'required|string',
            'deadline'          => 'required|date|after_or_equal:today',
            'link_pendaftaran'  => 'required|url',
        ];
    }
}
