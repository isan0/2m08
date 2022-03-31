<?php

use App\Models\Genere;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->year('year');
            $table->text('synopsis');
            $table->integer('duration');

            $table->boolean('type'); // true es pelicula false es serie
            $table->integer('seasson')->default(0);
            $table->integer('chapter')->default(0);
            $table->string('image');
            $table->unsignedBigInteger('genere')->default(random_int(0,10));
            // $table->unsignedBigInteger('movie_genere');
            $table->string('file');
            $table->timestamps();

            $table->foreign('genere')->references('id')->on('generes');
            if (!Genere::all()) {
                echo 'no existe entradas de genero';
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
