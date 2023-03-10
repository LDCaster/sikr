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
            $table->foreignId('rab_id')->constrained('rab')->nullable(); // kode_rab
            $table->foreignId('prk_id')->constrained('prk')->nullable(); // unit 
            $table->foreignId('variant_id')->constrained('material')->nullable(); // nama_variant
            $table->foreignId('satuan_id')->constrained('satuan')->nullable(); // satuan
            $table->string('volume')->nullable();
            $table->string('alokasi_bulan')->nullable();
            $table->string('no_prk')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->string('harga_transport')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('rnk');
    }
};
