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
        Schema::create('users', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique()->nullable();
            $table->longText('cur_area')->nullable();
            $table->bigInteger('cur_division_id')->nullable();
            $table->bigInteger('cur_district_id')->nullable();
            $table->bigInteger('cur_thana_id')->nullable();
            $table->integer('gross_salary')->nullable();
            $table->bigInteger('designation_id')->nullable();
            $table->bigInteger('department_id')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('signature_path')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('user_type')->default(0);
            $table->rememberToken();
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
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
