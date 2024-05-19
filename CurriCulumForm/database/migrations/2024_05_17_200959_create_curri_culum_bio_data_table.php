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
        Schema::create('curri_culum_bio_data', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable();
            $table->string('company_name')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_role')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curri_culum_bio_data');
    }
};
