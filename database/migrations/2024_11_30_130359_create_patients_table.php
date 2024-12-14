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
            $table->bigIncrements('patient_id');
            $table->string('patient_first_name')->nullable();
            $table->string('patient_last_name')->nullable();
            $table->string('patient_username')->nullable();
            $table->string('patient_email')->unique();
            $table->string('patient_password')->nullable();
            $table->string('patient_date_of_birth')->nullable();
            $table->string('patient_serial_number')->nullable();
            $table->string('patient_gender')->nullable();
            $table->string('patient_department')->nullable();
            $table->string('patient_blood_group')->nullable();
            $table->string('patient_disease')->nullable();
            $table->string('patient_address')->nullable();
            $table->string('patient_city')->nullable();
            $table->string('patient_phone',10)->nullable();
            $table->string('patient_photo')->nullable();
            $table->string('patient_status')->nullable();
            $table->string('patient_slug')->nullable();
            $table->integer('patient_restore_status')->default(1);
            $table->string('patient_creator')->nullable();
            $table->string('patient_editor')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('restored_at')->nullable();
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
