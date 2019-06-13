<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tourName');
            $table->text('content');
            $table->string('image')->nullable();
            $table->date('departureDay');
            $table->string('place');
            $table->string('transport');
            $table->integer('price');
            $table->unsignedBigInteger('organizer_id');
            $table->timestamps();
            $table->foreign('organizer_id')->references('id')->on('organizers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
