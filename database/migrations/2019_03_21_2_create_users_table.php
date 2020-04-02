<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->BigIncrements('user_id');
            $table->unsignedBigInteger('user_role');
            $table->string('user_cin',12)->unique();
            $table->string('fname',255);
            $table->string('lname',255);
            $table->enum('gender', ['M', 'F']);
            $table->enum('social_status', ['C','M', 'D']);
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('address',255);
            $table->string('phone',32);
            $table->date('dob');
            $table->date('doj');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_role','FK_roles_users')->references('role_id')->on('roles');

            // $table->foreign('user_id')->references('id')->on('users');
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
}
