<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('pic');
            $table->string('builder');
            $table->string('address');
            $table->string('jk_class');
            $table->date('jk_cede_date');
            $table->float('jk_ceiling_height');
            $table->float('rating');
            $table->text('descript');
            $table->float('services');
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
        Schema::drop('buildings');
    }
}
