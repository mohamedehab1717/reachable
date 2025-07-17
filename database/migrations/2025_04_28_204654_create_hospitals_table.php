<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id(); // ID تلقائي
            $table->string('img'); // اسم الصورة أو الرابط
            $table->string('title'); // عنوان المستشفى
            $table->text('des'); // وصف المستشفى
            $table->timestamps(); // created_at و updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
