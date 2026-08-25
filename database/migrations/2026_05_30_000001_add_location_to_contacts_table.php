<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('contacts') && !Schema::hasColumn('contacts', 'location')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->string('location')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('contacts') && Schema::hasColumn('contacts', 'location')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('location');
            });
        }
    }
};
