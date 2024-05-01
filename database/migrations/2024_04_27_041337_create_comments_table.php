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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('dish_id')->constrained('dishes', 'dish_id');
            $table->string('content', 500)->comment('комментарий');
            $table->float('rating',8,2)->default(0)->comment('Рейтинг');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
