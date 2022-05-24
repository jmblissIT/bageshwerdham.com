<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('audio_title_id')->unsigned();
            $table->bigInteger('audio_year_id')->unsigned();
            $table->String('audio_file');
            $table->timestamps();

            $table->foreign('audio_title_id')->references('audio_title_id')->on('audio_years')
            ->onDelete('cascade');
            $table->foreign('audio_year_id')->references('id')->on('audio_years')
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
        Schema::dropIfExists('audio_files');
    }
}
