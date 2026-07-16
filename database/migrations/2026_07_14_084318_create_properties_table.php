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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')
                  ->constrained()
                  ->cascadeOnUpdate()
                  ->restrictedOnDelete();
            $table->string('block')->nullable();
            $table->string('lot')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('model')->nullable();
            $table->string('lot_area',10,2)->nullable();
            $table->string('floor_area',10,2)->nullable();
            $table->string('tcp',15,2)->nullable();
            $table->string('status')->default('available');
            $table->boolvalean('is_active')->default(true);

            $table->timestamps();

            $table->softDeletes();

            $table->index('project_id');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
