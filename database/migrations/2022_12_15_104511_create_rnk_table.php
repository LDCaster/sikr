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
        Schema::create('rnk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('rab_id')->nullable();
            $table->string('nama_unit');
            $table->string('nama_variant');
            $table->string('nama_satuan');
            $table->string('volume');
            $table->string('alokas_bulan');
            $table->string('no_prk');
            $table->string('harga_satuan');
            $table->string('sub_harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rnk');
    }
};
