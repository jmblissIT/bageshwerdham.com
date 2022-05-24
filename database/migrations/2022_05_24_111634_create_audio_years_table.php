<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_years', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_title_id')->unsigned();
            $table->String('audio_title_year');
            $table->timestamps();

            $table->foreign('audio_title_id')->references('id')->on('audio')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audio_years');
    }
}
