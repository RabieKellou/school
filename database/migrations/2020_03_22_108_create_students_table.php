<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('std_id');
            $table->unsignedBigInteger('opt_id');
            $table->unsignedBigInteger('dept_id');
            $table->unsignedBigInteger('sem_id');
            $table->string('std_cne',12);
            $table->boolean('std_graduated');

            $table->primary('std_id');

            $table->foreign('std_id','FK_users_students')->references('user_id')->on('users');
            $table->foreign('opt_id','FK_options_students')->references('opt_id')->on('options');
            $table->foreign('dept_id','FK_departments_studentss')->references('dept_id')->on('departments');
            $table->foreign('sem_id','FK_semesters_students')->references('sem_id')->on('semesters');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
