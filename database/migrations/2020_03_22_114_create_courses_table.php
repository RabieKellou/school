<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('course_id');
            $table->unsignedBigInteger('tr_id');
            $table->unsignedBigInteger('mod_id');
            $table->string('course_name',1024);
            $table->text('course_desc');
            $table->string('course_type',1024);
            $table->timestamps();

            $table->foreign('tr_id','FK_teachers_courses')->references('tr_id')->on('teachers');
            $table->foreign('mod_id','FK_modules_courses')->references('mod_id')->on('modules');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
