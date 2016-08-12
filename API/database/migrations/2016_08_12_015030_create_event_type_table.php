<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_types', function (Blueprint $table) {
            $table->increments('et_id');
            $table->integer('parent_id')->unsigned();
            $table->integer('left_id');
            $table->integer('right_id');
            $table->string('type_name');
            $table->string('type_desc')->nullable();
            $table->string('type_icon');

            $table->foreign('parent_id')
                ->references('et_id')
                ->on('event_types')
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
        Schema::drop('event_types');
    }
}
