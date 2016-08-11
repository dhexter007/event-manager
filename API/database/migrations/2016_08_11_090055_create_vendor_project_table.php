<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_projects', function (Blueprint $table) {
            $table->increments('vp_id');
            $table->integer('vs_id')->unsigned();
            $table->string('project_title');
            $table->string('project_desc');
            $table->string('project_cover');

            $table->foreign('vs_id')
                ->references('vs_id')
                ->on('vendor_services')
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
        Schema::drop('vendor_projects');
    }
}
