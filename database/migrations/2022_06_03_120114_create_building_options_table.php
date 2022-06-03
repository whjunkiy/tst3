<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building_id', false, true)->length(10);
            $table->string('jk_constructive');
            $table->string('jk_garnish');
            $table->tinyInteger('jk_underparking');
            $table->tinyInteger('jk_min_floor');
            $table->tinyInteger('jk_max_floor');
            $table->tinyInteger('jk_price_group');
            $table->boolean('jk_good_yard');
            $table->boolean('jk_near_forest');
            $table->timestamps();
            $table->index('building_id');
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('building_options');
    }
}
