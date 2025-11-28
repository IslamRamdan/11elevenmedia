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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');                 // عنوان المشروع
            $table->text('description')->nullable(); // وصف المشروع
            $table->string('type');                  // image | video
            $table->string('file');                  // مسار الملف (الصورة أو الفيديو)
            $table->string('thumbnail')->nullable();                  // مسار الملف (الصورة أو الفيديو)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
