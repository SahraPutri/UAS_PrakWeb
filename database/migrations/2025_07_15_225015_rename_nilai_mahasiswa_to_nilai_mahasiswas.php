<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNilaiMahasiswaToNilaiMahasiswas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Mengganti nama tabel
        Schema::rename('nilai_mahasiswa', 'nilai_mahasiswas');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Membalikkan perubahan jika migration di-rollback
        Schema::rename('nilai_mahasiswas', 'nilai_mahasiswa');
    }
}
