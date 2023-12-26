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
        Schema::create('desease_symtoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desease_id');
            $table->unsignedBigInteger('symtoms_id');
            $table->foreign('desease_id')->references('id')->on('desease');
            $table->foreign('symtoms_id')->references('id')->on('symtoms');
            $table->string('cf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desease_symtoms');
    }
};
