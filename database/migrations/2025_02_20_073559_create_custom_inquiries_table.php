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
        Schema::create('custom_inquiries', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('type'); // Type of inquiry
            $table->string('title'); // Title of the inquiry
            $table->decimal('height', 8, 2)->nullable(); // Height (nullable)
            $table->decimal('width', 8, 2)->nullable(); // Width (nullable)
            $table->string('name'); // Name of the person making the inquiry
            $table->string('email'); // Email of the person
            $table->string('phone'); // Phone number
            $table->string('image')->nullable(); // Image (nullable)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_inquiries');
    }
};
