<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_anggota',10)->unique();
            $table->string('nik',20);
            $table->string('nama',50);
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin',1);
            $table->string('no_telp',25);
            $table->foreignId('pekerjaan_id');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};
