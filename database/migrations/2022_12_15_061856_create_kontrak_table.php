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
            $table->foreignId('pabrikan_id')->nullable();
            $table->string('no_kr');
            $table->string('bt_kr')->nullable();
            $table->date('tanggal_kr')->nullable();
            $table->string('no_prk')->nullable();
            $table->string('user')->nullable();
            $table->foreignId('rab_id')->nullable();
            $table->string('terbilang_kontrak')->nullable();
            $table->string('hari')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('bulan')->nullable();
            $table->string('tahun')->nullable();
            $table->integer('wd_kontrak')->nullable();
            $table->string('terbilang_waktu')->nullable();
            $table->foreignId('direksi_id')->nullable();
            $table->foreignId('material_id')->nullable();
            $table->foreignId('variant_id')->nullable();
            $table->string('satuan')->nullable();
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
