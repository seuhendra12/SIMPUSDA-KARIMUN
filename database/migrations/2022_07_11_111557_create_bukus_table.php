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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul',50);
            $table->string('pengarang',50);
            $table->string('penerbit',50);
            $table->char('tahun',4);
            $table->string('isbn',30)->unique();
            $table->foreignId('kategori_id');
            $table->char('klasifikasi',10);
            $table->integer('jumlah');
            $table->string('file_upload')->nullable();
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
        Schema::dropIfExists('bukus');
    }
};
