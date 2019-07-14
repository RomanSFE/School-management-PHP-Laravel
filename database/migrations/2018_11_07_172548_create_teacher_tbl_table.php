<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_tbl', function (Blueprint $table) {
            $table->increments('teachers_id');
            $table->string('teachers_name');
            $table->string('teachers_phone');
            $table->string('teachers_dept');
            $table->string('teachers_balance');
            $table->string('teachers_image');

            $table->string('teachers_email');
            $table->string('teachers_password');
            $table->string('teachers_extra'); 
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
        Schema::dropIfExists('teacher_tbl');
    }
}
