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
        Schema::create('medichines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_category')->references('id')->on('medichines_categories');
            $table->string('name');
            $table->string('price');
            $table->string('decription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medichines');
    }
};
