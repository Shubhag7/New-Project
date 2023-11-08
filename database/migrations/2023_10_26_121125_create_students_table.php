<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->enum('admission_type',['Regular','RTE','Scholarship']);
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('student_aadhar_number', 12);
            $table->string('father_aadhar_number', 12);
            $table->string('mother_aadhar_number', 12);
            $table->string('father_mobile_number_1')->nullable();
            $table->string('father_mobile_number_2')->nullable();
            $table->string('mother_mobile_number_1')->nullable();
            $table->string('mother_mobile_number_2')->nullable();
            $table->string('official_communication_number')->nullable();
            $table->enum('gender',['M','F','O'])->comment("Male->M, Female->F, Other->O");
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->enum('religion', ['Hindu','Islam','Christian','Buddish','Sikh','Other']);
            $table->string('caste');
            $table->string('category');
            $table->string('roll_no');
            $table->enum('blood_group', ['A+','A-','B+','B-','O+','O-','AB+','AB-'])->nullable();
            $table->enum('class', ['PC','UKG','One','Two','Three','Four','Five','Six','Seven','Eight']);
            $table->string('email');
            $table->string('address');
            $table->string('discription')->nullable();
            $table->string('student_image')->nullable();
            $table->string('student_aadhar_image')->nullable();
            $table->string('father_aadhar_image')->nullable();
            $table->string('mother_aadhar_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
