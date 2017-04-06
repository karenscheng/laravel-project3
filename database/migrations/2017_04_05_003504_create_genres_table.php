<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('genres', function (Blueprint $table) {
        $table->increments('id');
        $table->string('genre')->default(''); //non-fiction or fiction
        $table->string('subgenre')->default('');  //biography, fantasy, etc.
        $table->boolean('favorite');
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
        Schema::dropIfExists('genres');
    }
}
