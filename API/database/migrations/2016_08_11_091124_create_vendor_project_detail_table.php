<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorProjectDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_project_details', function (Blueprint $table) {
            $table->increments('vp_detail_id');
            $table->integer('vp_id')->unsigned();
            $table->string('vp_detail_picture');
            $table->string('vp_detail_desc');

            $table->foreign('vp_id')
                ->references('vp_id')
                ->on('vendor_projects')
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
        Schema::drop('vendor_project_details');
    }
}
