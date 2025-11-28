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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');        // العنوان بالعربي
            $table->string('title_en');        // العنوان بالإنجليزي
            $table->text('content_ar');        // المحتوى بالعربي
            $table->text('content_en');        // المحتوى بالإنجليزي
            $table->string('thumbnail')->nullable(); // صورة المدونة اختيارية
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
