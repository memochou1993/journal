<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('creator');
            $table->string('subject');
            $table->string('description');
            $table->string('publisher');
            $table->string('contributor');
            $table->string('date');
            $table->string('type');
            $table->string('format');
            $table->string('identifier');
            $table->string('source');
            $table->string('language');
            $table->string('relation');
            $table->string('coverage');
            $table->string('rights');
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
        Schema::dropIfExists('journals');
    }
}
