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
        Schema::table('users', function (Blueprint $table) {
            $table->string('image_path')->default('')->nullable(false);  // For storing image file path
            $table->string('name')->default('')->nullable(false);
            $table->decimal('price', 8, 2)->default(0.00)->nullable(false);  // Adjust precision as needed
            $table->text('description')->default('')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
