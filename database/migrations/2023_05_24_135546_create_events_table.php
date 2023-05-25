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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('event_price');
            $table->string('event_place');
            $table->string('event_date');
            $table->string('event_time');
            $table->longText('event_desc');
            $table->string('event_benefit');
            $table->unsignedBigInteger('event_participant');
            $table->boolean('favorite');
            $table->longText('event_image');

            $table->foreign('category_id')->references('id')->on('event_categories')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
