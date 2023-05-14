<?php

use App\Models\TypeEquip;
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
            $table->foreignIdFor(TypeEquip::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title');
            $table->smallInteger('status');
            $table->foreignId('computer_id')->nullable()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('cabinet_id')->nullable()->cascadeOnUpdate()->nullOnDelete();
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
