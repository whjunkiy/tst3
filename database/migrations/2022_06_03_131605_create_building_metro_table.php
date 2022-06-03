<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingMetroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_metro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->tinyInteger('drive_by');
            $table->smallInteger('togo_time');
            $table->integer('building_id', false, true)->length(10);
            $table->index('building_id');
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
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
        Schema::drop('building_metro');
    }
}
