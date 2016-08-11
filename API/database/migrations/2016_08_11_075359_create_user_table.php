<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            //account
            $table->string('username');
            $table->string('password');
            $table->integer('role_id')->unsigned();
            
            //contact
            $table->string('celular');
            $table->string('email');
            $table->string('google');
            $table->string('twitter');
            $table->string('facebook');            
            $table->string('website');

            //position
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('long');
            $table->string('lat');

            //personal profile
            $table->string('salutation')->nullable();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('about');

            //photo
            $table->string('cover');
            $table->string('profile');         

            $table->foreign('role_id')
                ->references('role_id')
                ->on('roles')
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
        Schema::drop('users');
    }
}
