<?php

use App\Models\Computer;
use App\Models\Equip;
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
        Schema::create('computer_equips', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Computer::class, 'comp_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Equip::class, 'equip_id')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer_equips');
    }
};
