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
            $table->id(); //primary key integer 'id'
            $table->string('name'); //varchar(255)
            $table->string('email')->unique(); //chaining method
            $table->timestamp('email_verified_at')->nullable(); //timestamp ,datetime
            $table->string('password');//varchar(60)
            $table->rememberToken();//remember_token
            $table->timestamps();//'created_at' ,'updated_at'
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
