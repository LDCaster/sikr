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
        Schema::create('harga_transport_asuransi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('material_id')->constrained('material');
            $table->string('tahun')->nullable();
            $table->string('lokasi_awal')->nullable();
            $table->string('pln_kantor_pusat')->nullable();
            $table->string('pln_area_up3')->nullable();
            $table->string('harga')->nullable();
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
        Schema::dropIfExists('harga_transport_asuransi');
    }
};
