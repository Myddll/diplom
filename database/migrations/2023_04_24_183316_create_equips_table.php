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
        Schema::create('equips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title')->unique();
            $table->json('specs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equips');
    }
};
