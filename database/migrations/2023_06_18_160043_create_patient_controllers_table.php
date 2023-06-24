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
            $table->id();
            $table->string('form_type')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('bed_no')->nullable();
            $table->string('patient_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->date('admission_date')->nullable();
            $table->time('admission_time')->nullable();
            $table->bigInteger('aadhaar_no')->nullable();
            $table->string('guardian_name')->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('under_doctor')->nullable();
            $table->bigInteger('refer_doctor_1')->nullable();
            $table->bigInteger('refer_doctor_2')->nullable();
            $table->bigInteger('phone_no')->nullable();
            $table->bigInteger('alternative_phone_no')->nullable();
            $table->string('refer_by')->nullable();
            $table->string('mode')->nullable();
            $table->string('urn_no')->nullable();
            $table->string('insurance_name')->nullable();
            $table->bigInteger('anesthesis')->nullable();
            $table->bigInteger('child_doctor')->nullable();
            $table->bigInteger('assistance_1')->nullable();
            $table->bigInteger('assistance_2')->nullable();
            $table->enum('status',[0,1])->nullable();
            $table->enum('discharge_status',[0,1,2,3])->nullable();
            $table->timestamps();
            $table->softDeletes();
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
