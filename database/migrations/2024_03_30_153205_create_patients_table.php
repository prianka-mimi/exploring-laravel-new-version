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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('patient_name');
            $table->string('patient_email')->unique();
            $table->string('patient_dob')->nullable();
            $table->string('patient_gender')->nullable();
            $table->string('patient_department')->nullable();
            $table->string('patient_blood_group')->nullable();
            $table->string('patient_address')->nullable();
            $table->string('patient_image')->nullable();
            $table->string('patient_creator')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
