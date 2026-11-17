<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('obras_entregues', function (Blueprint $table) {
            $table->id();
            $table->string('imagem');
            $table->string('nome_obra');
            $table->string('localidade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obras_entregues');
    }
};
