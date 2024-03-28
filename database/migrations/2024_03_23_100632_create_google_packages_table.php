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
        Schema::create('google_packages', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('currency_price')->unsgined();
            $table->tinyInteger('main_price')->unsgined();
            $table->tinyInteger('offer')->default(0)->unsgined();
            $table->string('description', 255);
            $table->string('bid', 255)->default(0);
            $table->string('currency', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_packages');
    }
};
