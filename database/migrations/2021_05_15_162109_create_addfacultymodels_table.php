<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddfacultymodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addfacultymodels', function (Blueprint $table) {
            $table->id();
            $table->string("fid");
            $table->string("fname");
            $table->string("fusername");
            $table->string("fcourse");
            $table->string("fpassword");
            $table->mediumText("pimage")->nullable();
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
        Schema::dropIfExists('addfacultymodels');
    }
}
