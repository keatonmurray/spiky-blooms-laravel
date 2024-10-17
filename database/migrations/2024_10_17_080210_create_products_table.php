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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->decimal('price', 10, 2)->nullable();
                $table->longText('description')->nullable();
                $table->integer('quantity')->nullable();
                $table->string('sku')->unique()->nullable();
                $table->string('image')->nullable();
                $table->boolean('on_sale')->default(false);
                $table->decimal('sale_price', 10, 2)->nullable();
                $table->text('attributes')->nullable();
                $table->text('tags')->nullable();
                $table->boolean('active')->default(true);
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
        Schema::dropIfExists('products');
    }
};
