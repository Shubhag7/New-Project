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
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['M','F','O'])->comment("Male->M, Female->F, Other->O");
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('roll_no');
            $table->string('blood_group', 3);
            $table->string('class', 3);
            $table->string('section', 1);
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone_number')->nullable();
            $table->string('discription')->nullable();
            $table->string('image');
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
