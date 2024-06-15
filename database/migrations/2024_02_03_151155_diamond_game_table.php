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
        Schema::create('diamond_game', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_game');
            $table->string('jumlah_diamond');
            $table->integer('harga_diamond');
            $table->timestamps();

            $table->foreign('nama_game')->references('id')->on('kategori_games')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};
