<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keranjangbelanja', function (Blueprint $table) {
            $table->id();
            $table->integer('KodeBarang');
            $table->integer('Jumlah');
            $table->integer('Harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keranjangbelanja');
    }
};