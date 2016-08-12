<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidding', function (Blueprint $table) {
            $table->increments('bidding_id');
            $table->integer('oe_detail_id')->unsigned();
            $table->integer('user_id')->unsigned(); //user_id of vendor
            $table->string('bidding_budget');
            $table->string('bidding_desc');
            $table->string('bidding_status', 1)->default(0); // 1 = choosen ; 0 = applied

            $table->foreign('oe_detail_id')
                ->references('oe_detail_id')
                ->on('owner_event_details')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
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
        Schema::drop('bidding');
    }
}
