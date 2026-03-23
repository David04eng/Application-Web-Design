<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            
            // Estos son los campos que pide tu tarea:
            $table->string('real_name');      // Nombre real
            $table->string('hero_name');      // Nombre de héroe
            $table->string('photo');          // URL de la foto
            $table->text('description');      // Información adicional
            
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
        Schema::dropIfExists('superheroes');
    }
}