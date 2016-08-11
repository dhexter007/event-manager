<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('log_id');
            $table->string('log_table');
            $table->string('log_record');
            $table->string('log_action');
            $table->string('log_dump');
            $table->string('log_user');
            $table->string('log_ip');
            $table->string('log_location');
            $table->string('log_os');
            $table->string('log_browser');
            $table->timestamp('log_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logs');
    }
}
