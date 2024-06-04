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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('date_of_birth');
            $table->string('nrc')->unique()->nullable()->default(null);
            $table->string('gender');
            $table->string('nationality')->nullable()->default(null);
            $table->string('marital_status');
            $table->string('user_type');
            $table->boolean('is_operation')->default(0);
            $table->string('degree')->nullable()->default(null);
            $table->string('phone_1');
            $table->string('phone_2')->nullable()->default(null);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address');
            $table->string('father_name');
            $table->string('contact_phone')->nullable()->default(null);
            $table->string('start_date');
            $table->string('position')->nullable()->default(null);
            $table->foreignId('city_id')->constrained('cities')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('township_id')->constrained('townships')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('branch_id')->constrained('branches')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnUpdate()->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
