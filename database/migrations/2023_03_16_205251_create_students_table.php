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
            $table->id();
            $table->string('student_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('age');
            $table->date('birthdate');
            $table->enum('grade_level',['G11','G12']);
            $table->enum('strand', ['STEM','GAS','HUMSS','ABM','TVL']);
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
}
