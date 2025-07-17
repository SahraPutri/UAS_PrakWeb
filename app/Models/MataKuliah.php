<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    // Menambahkan $fillable untuk menghindari MassAssignmentException
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'dosen',
    ];

    // Relasi ke tabel nilai
    public function nilai()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }

}
