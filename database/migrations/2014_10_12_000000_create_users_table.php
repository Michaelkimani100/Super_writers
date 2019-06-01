<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('national');
            $table->string('city');
            $table->string('payment');
            $table->string('availability');
            $table->mediumText('about_me');
            $table->mediumText('areas');
            $table->string('citation');
            $table->string('gender');     
            $table->boolean('admin')->default(0);   
            $table->boolean('approved')->default(0);   
            $table->string('token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
