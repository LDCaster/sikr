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
        Schema::create('prk', function (Blueprint $table) {
            $table->id();
            $table->string('no_prk');
            $table->string('bidang');
            $table->string('fungsi');
            $table->text('sub_fungsi');
            $table->text('program');
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
        Schema::dropIfExists('prk');
    }
};
