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
        if (Schema::hasTable('blogs') && !Schema::hasColumn('blogs', 'gallery_images')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->json('gallery_images')->nullable()->after('image');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('blogs') && Schema::hasColumn('blogs', 'gallery_images')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('gallery_images');
            });
        }
    }
};
