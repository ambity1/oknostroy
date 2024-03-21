<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameCatalog');
            $table->string('alias');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
