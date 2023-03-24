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
            // 外部キー
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('category');
            $table->string('brand');
            $table->string('condition');
            $table->unsignedInteger('kaitori_price');
            $table->unsignedInteger('price');
            $table->text('comment')->nullable();
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
