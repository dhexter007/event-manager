<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_events', function (Blueprint $table) {
            $table->increments('oe_id');
            $table->integer('user_id')->unsigned();
            $table->integer('et_id')->unsigned();
            $table->string('event_name');
            $table->string('event_desc');
            $table->string('event_date');

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('et_id')
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
        Schema::drop('owner_events');
    }
}
