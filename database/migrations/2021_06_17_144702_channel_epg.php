<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChannelEpg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_epgs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel_no')->unique();
            $table->string('channel_name');
            $table->dateTime('epg_date');
            $table->integer('program_id')->unsigned()->index();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->dateTime('epg_start_time');
            $table->dateTime('epg_end_time');
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
        //
    }
}
