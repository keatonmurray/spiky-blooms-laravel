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
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            Schema::create('shop', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->decimal('price', 10, 2)->nullable();
                $table->longText('description')->nullable();
                $table->integer('quantity')->nullable();
                $table->json('variations')->nullable(); 
                $table->string('sku')->unique()->nullable();
                $table->string('image')->nullable();
                $table->timestamps(); 
            });
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop');
    }
};
