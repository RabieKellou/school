<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->unsignedBigInteger('std_id');
            $table->unsignedBigInteger('tr_id');
            $table->unsignedBigInteger('exam_id');
            $table->float('std_grade');
            $table->primary(['std_id','tr_id','exam_id']);

            $table->foreign('std_id','FK_students_grades')->references('std_id')->on('students');
            $table->foreign('tr_id','FK_teachers_grades')->references('tr_id')->on('teachers');
            $table->foreign('exam_id','FK_exams_grades')->references('exam_id')->on('exams');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
