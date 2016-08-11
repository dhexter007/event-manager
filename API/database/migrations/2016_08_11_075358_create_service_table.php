<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('service_id');
            $table->integer('parent_id')->unassign();
            $table->integer('left_id');
            $table->integer('right_id');
            $table->string('service_name');
            $table->string('service_desc')->nullable();
            $table->string('service_icon');

            $table->foreign('parent_id')
                ->references('service_id')
                ->on('services')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('services');
    }
}
