<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->unsignedBigInteger('att_id');
            $table->unsignedBigInteger('std_id');
            $table->unsignedBigInteger('course_id');
            $table->date('att_date');
            $table->boolean('att_status');
            $table->string('att_desc',1024);
            $table->primary(['att_id','std_id','course_id']);

            $table->foreign('std_id','FK_students_attendances')->references('std_id')->on('students');
            $table->foreign('course_id','FK_courses_attendances')->references('course_id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
