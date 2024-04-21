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
            $table->date('DOB')->nullable(true);; 
            $table->boolean('gender')->nullable(true); 
            $table->string('password')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('avatar')->default('default.jpg');
            $table->string('background')->nullable(true);
            $table->integer('role_id_fk')->nullable(true);
//             $table->increments('user_id');
//             $table->string('last_name',length:20); 
//             $table->string('first_name',length:20); 
//             $table->date('DOB'); 
//             $table->string('email')->unique();
//             $table->timestamp('email_verified_at')->nullable();
//             $table->string('password');
//             $table->boolean('gender'); 
//             $table->string('description'); 
//             $table->string('avatar'); 
//             $table->string('background'); 
//             $table->integer('role_id_fk');
//             $table->rememberToken();
         
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
