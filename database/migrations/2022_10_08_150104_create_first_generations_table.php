<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstGenerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_generations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('date_of_birth')->nullable();;
            $table->string('birth_place')->nullable();;
            $table->string('date_of_death')->nullable();;
            $table->text('about')->nullable();;
            $table->string('death_place')->nullable();;
            $table->string('photo')->nullable();;
            $table->string('laws_house')->nullable();;
            $table->string('wife')->nullable();;
            $table->integer('child')->nullable();;
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
        Schema::dropIfExists('first_generations');
    }
}
