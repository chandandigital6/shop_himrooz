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
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->double('price',10,2)->nullable();
            $table->double('discount_price', 10,2)->nullable();
            $table->foreignId('categories_id')->constrained();
            $table->foreignId('sub_categories_id')->nullable()->constrained();
            $table->foreignId('brands_id')->nullable()->constrained();
            $table->enum('is_featured',['yes', 'no'])->default('no');
            $table->string('sku_no');
            $table->string('barcode')->nullable();
            $table->string('image');
            $table->integer('qty')->nullable();
            $table->integer('status')->default(1);
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
