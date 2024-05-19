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
        Schema::create('amount_cup', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cup_id')
                ->constrained('cups')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('amount_id')
                ->constrained('amounts')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amount_cup');
    }
};
