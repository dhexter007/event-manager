<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerEventDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_event_details', function (Blueprint $table) {
            $table->increments('oe_detail_id');
            $table->integer('oe_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->string('oe_detail_desc');
            $table->string('oe_detail_budget');

            $table->foreign('oe_id')
                ->references('oe_id')
                ->on('owner_events')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('service_id')
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
        Schema::drop('owner_event_details');
    }
}
