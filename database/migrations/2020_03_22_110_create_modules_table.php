<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('mod_id');
            $table->unsignedBigInteger('sem_id');
            $table->string('mod_name',1024);
            $table->text('mod_desc');
            $table->timestamps();

            $table->foreign('sem_id','FK_semesters_modules')->references('sem_id')->on('semesters');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
