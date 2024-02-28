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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('total_days');
            $table->string('reason');
            $table->date('starting_date');
            $table->date('resumption_date');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('rcomnd_auth_status')->default(0);
            $table->foreignId('rcomnd_auth_id')->nullable()->constrained('users');
            $table->date('rcomnd_auth_date')->nullable();
            $table->integer('aprv_auth_status')->default(0);
            $table->foreignId('aprv_auth_id')->nullable()->constrained('users');
            $table->date('aprv_date')->nullable();
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
        Schema::dropIfExists('leaves');
    }
};
