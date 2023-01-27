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
        Schema::create('pabrikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_vendor');
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('nama_direktur')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('no_notaris')->nullable();
            $table->text('no_khs')->nullable();
            $table->string('nama_pengadaan')->nullable();
            $table->string('nama_rekening')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('cabang')->nullable();
            $table->string('no_rekening')->nullable();
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
        Schema::dropIfExists('pabrikan');
    }
};
