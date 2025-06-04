<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lampu', function (Blueprint $table) {
            $table->id();
            $table->string('merklampu', 25);
            $table->integer('hargalampu');
            $table->boolean('tersedia');
            $table->float('berat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lampu');
    }
};