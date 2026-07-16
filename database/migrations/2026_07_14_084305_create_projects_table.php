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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('developer_id')
                  ->constrained()
                  ->cascadeOnUpdate()
                  ->restrictedOnDelete();
            $table->string('name');
            $table->string('code', 20)->unique();
            $table->string('location')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('property_type');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('developer_id');
            $table->index('city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
