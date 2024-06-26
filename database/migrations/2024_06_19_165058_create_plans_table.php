<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sponser_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('mon_tue_wed_thu_fri_san_sun');
            $table->string('date_time_from')->nullable();;
            $table->string('date_time_to')->nullable();
            $table->string('status')->nullable();;
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
        Schema::dropIfExists('plans');
    }
};
