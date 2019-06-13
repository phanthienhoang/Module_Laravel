<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setdetails', function (Blueprint $table) {
            $table->unsignedBigInteger('settour_id');
            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('customer_id');
            $table->integer('price');
            $table->timestamps();
            $table->primary(['settour_id','tour_id','customer_id']);
            $table->foreign('settour_id')->references('id')->on('tours');
            $table->foreign('tour_id')->references('id')->on('settours');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setdetails');
    }
}
