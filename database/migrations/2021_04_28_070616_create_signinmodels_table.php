<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigninmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signinmodels', function (Blueprint $table) {
            $table->id();
            $table->string("rollno");
            $table->string("fullname");
            $table->string("emailid");
            $table->string("phno");
            $table->string("gender");
            $table->string("course");
            $table->string("password");                     
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
        Schema::dropIfExists('signinmodels');
    }
}
