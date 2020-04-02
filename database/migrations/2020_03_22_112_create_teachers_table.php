<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('tr_id');
            $table->unsignedBigInteger('dept_id');
            $table->string('tr_title');
            $table->boolean('tr_available');

            $table->foreign('tr_id','FK_users_departments')->references('user_id')->on('users');

            $table->foreign('dept_id','FK_teachers_departments')->references('dept_id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
