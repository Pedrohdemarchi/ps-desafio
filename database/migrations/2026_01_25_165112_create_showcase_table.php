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
        Schema::create('showcases', function (Blueprint $table) {
            $table->id();
            $table->string('title_showcase');
            $table->string('subtitle_showcase');
            $table->text('description_showcase');
            $table->text('subdescription_showcase')->nullable();
            $table->string('logo_showcase');      // caminho ou nome do arquivo
            $table->string('image_showcase');     // foto principal
            $table->json('tag_showcase')->nullable();
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
        Schema::dropIfExists('showcases');
    }
};
