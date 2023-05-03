<?php

use App\Models\Cabinet;
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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cabinet::class, 'cabinet_id')->nullable()->cascadeOnUpdate()->nullOnDelete();
            $table->string('processor');
            $table->string('motherboard');
            $table->string('ram');
            $table->string('videocard');
            $table->string('memory');
            $table->string('power_unit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
