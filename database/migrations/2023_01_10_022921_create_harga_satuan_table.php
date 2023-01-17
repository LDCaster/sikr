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
        Schema::create('harga_satuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variant_id')->constrained('material');
            $table->foreignId('pabrikan_id')->constrained('pabrikan');
            $table->string('tahun')->nullable();
            $table->string('harga_satuan')->nullable();
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
        Schema::dropIfExists('harga_satuan');
    }
};
