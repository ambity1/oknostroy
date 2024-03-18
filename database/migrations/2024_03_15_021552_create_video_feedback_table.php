<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('video_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameClient');
            $table->string('addressClient');
            $table->string('linkOnVideo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video_feedback');
    }
};
