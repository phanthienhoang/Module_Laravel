<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();;
            $table->integer('user_id')->unsigned();;
            $table->string('name', 60);
            $table->text('description')->nullable();;
            $table->boolean('active')->default(true);
            $table->integer('question_quota')->default(60);
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('tests');
    }
}
