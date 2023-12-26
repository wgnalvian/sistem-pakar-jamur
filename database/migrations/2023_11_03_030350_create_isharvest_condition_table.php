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
        Schema::create('isharvest_condition', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('isharvest_id');
            $table->unsignedBigInteger('condition_id');
            $table->foreign('isharvest_id')->references('id')->on('isharvest');
            $table->foreign('condition_id')->references('id')->on('condition');
            $table->string('cf');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isharvest_condition');
    }
};
