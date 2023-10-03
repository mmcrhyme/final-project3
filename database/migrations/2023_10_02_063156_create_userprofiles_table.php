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
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('role');
            $table->string('user_nickname')->nullable();
            $table->string('fname')->nullable();
            $table->string('sns')->nullable();
            $table->string('department')->nullable();
            $table->text('detail')->nullable();
            $table->text('purpose')->nullable();
            $table->text('whyme')->nullable();
            $table->text('motto')->nullable();
            $table->text('career')->nullable();
            $table->string('hometown')->nullable();
            $table->text('hobby')->nullable();
            $table->string('like')->nullable();
            $table->string('dislike')->nullable();
            $table->string('strength')->nullable();
            $table->string('weakness')->nullable();
            $table->string('mbti')->nullable();
            $table->text('holiday')->nullable();
            $table->string('privatefname')->nullable();
            $table->string('calendar')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofiles');
    }
};
