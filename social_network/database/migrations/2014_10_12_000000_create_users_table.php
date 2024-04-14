<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
            $table->increments('user_id');
            $table->string('last_name',length:20); 
            $table->string('first_name',length:20); 
            $table->string('email')->nullable(false); 
            $table->date('DOB'); 
            $table->boolean('gender'); 
            $table->string('password',length:20); 
            $table->string('description'); 
            $table->string('avatar'); 
            $table->string('background'); 
            $table->integer('role_id_fk'); 
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
};
