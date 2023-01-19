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
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengadaan_id')->constrained('pengadaan')->nullable();
            $table->foreignId('pabrikan_id')->constrained('pabrikan')->nullable();
            $table->string('no_kr')->nullable();
            $table->string('bt_kr')->nullable();
            $table->date('tanggal_kr')->nullable();
            $table->foreignId('rab_id')->constrained('rab')->nullable();
            $table->string('nilai_kontrak')->nullable();
            $table->string('terbilang_kontrak')->nullable();
            $table->string('nilai_jamlak')->nullable();
            $table->string('terbilang_jamlak')->nullable();
            $table->string('hari')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('bulan')->nullable();
            $table->string('tahun')->nullable();
            $table->integer('wd_kontrak')->nullable();
            $table->string('terbilang_waktu')->nullable();
            $table->string('direksi_pekerjaan')->nullable();
            $table->string('pengawas_pekerjaan')->nullable();
            $table->foreignId('jmaterial_id')->constrained('jenismaterial')->nullable();
            $table->string('nama_variant')->nullable();
            $table->foreignId('satuan_id')->constrained('satuan')->nullable();
            $table->string('volume')->nullable();
            $table->string('no_type')->nullable();
            $table->string('no_spm')->nullable();
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
        Schema::dropIfExists('kontrak');
    }
};
