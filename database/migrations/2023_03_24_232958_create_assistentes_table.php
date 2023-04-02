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
        Schema::create('assistentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**z
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistentes');
    }
};
