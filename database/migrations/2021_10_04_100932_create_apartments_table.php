<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('description');
            $table->boolean('sponsorActive')->default(false);
            $table->unsignedTinyInteger('rooms_num');
            $table->unsignedTinyInteger('beds_num');
            $table->unsignedTinyInteger('bath_num');
            $table->unsignedSmallInteger('meters_size');
            $table->text('address');
            $table->char('title',50);
            $table->boolean('visible');
            $table->text('img_path');
            $table->unsignedSmallInteger('price_night');
            $table->float('longitude', 8, 5);
            $table->float('latitude', 8, 5);
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
        Schema::dropIfExists('apartments');
    }
}
