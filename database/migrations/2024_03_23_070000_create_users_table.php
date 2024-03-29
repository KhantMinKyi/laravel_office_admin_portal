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
            $table->string('user_name');
            $table->string('password');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('full_name',100);
            $table->date('date_of_birth');
            $table->string('nrc',100)->unique()->nullable()->default(null);
            $table->enum('gender',config('enums.gender'));
            $table->string('nationality',100)->nullable()->default(null);
            $table->enum('marital_status',config('enums.marital_status'));
            $table->string('degree',100)->nullable()->default(null);
            $table->string('phone_1',20);
            $table->string('phone_2',20)->nullable()->default(null);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address');
            $table->string('father_name',100);
            $table->string('contact_phone',20)->nullable()->default(null);
            $table->date('start_date');
            $table->string('position',20)->nullable()->default(null);
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
