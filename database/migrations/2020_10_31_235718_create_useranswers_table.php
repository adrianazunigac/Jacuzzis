<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseranswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useranswers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_surveys');
            $table->unsignedBigInteger('id_questions');
            $table->unsignedBigInteger('id_answers');
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_surveys')->references('id')->on('surveys');
            $table->foreign('id_questions')->references('id')->on('questions');
            $table->foreign('id_answers')->references('id')->on('answers');
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
        Schema::dropIfExists('useranswers');
    }
}
