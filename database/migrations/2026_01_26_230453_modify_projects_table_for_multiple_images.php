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
        Schema::table('projects', function (Blueprint $table) {
            $table->json('images')->nullable()->after('description');
        });

        // Migrate existing data
        \DB::statement("UPDATE projects SET images = JSON_ARRAY(image) WHERE image IS NOT NULL");

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('image')->nullable()->after('description');
        });

        // Migrate data back (take the first image)
        \DB::statement("UPDATE projects SET image = JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) WHERE images IS NOT NULL");

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
};
