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
        Schema::create('types_equip', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TypeEquip::class, 'type_equip')->cascadeOnUpdate()->cascadeOnDelete();
            $table->json('specs_fields');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_equip');
    }
};
