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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id('dish_id');
            $table->string('name', 100);
            $table->string('description', 255)->comment('Описание');
            $table->string('image')->nullable()->comment('путь до изображения');
            $table->decimal('price')->default(999)->comment('Цена');
            $table->float('rating',8,2)->default(0)->comment('Рейтинг');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
