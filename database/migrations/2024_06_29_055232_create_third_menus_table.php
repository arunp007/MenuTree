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
        Schema::create('third_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('main_menu_id')->constrained()->onDelete('cascade');
            $table->foreignId('sub_menu_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('third_menus');
    }
};
