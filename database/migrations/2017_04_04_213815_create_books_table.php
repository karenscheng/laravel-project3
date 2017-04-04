<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('books', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title')->default('');
        $table->string('authorFirst')->default('');
        $table->string('authorLast')->default('');
        $table->string('genre')->default('');
        $table->string('publisher')->default('');
        $table->integer('yearPublished')->default(0);
        $table->integer('pages')->default(0);
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
        Schema::dropIfExists('books');
    }
}
