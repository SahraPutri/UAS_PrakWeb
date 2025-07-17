<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Menambahkan $fillable untuk menghindari MassAssignmentException
    protected $fillable = [
        'nama',
        'nim',
        'nomor_telepon',
        'email',
    ];

    // Relasi ke tabel nilai
    public function nilai()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }
}