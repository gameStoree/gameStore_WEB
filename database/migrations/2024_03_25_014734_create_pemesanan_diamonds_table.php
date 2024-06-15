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
        Schema::create('pemesanan_diamonds', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('id_server', 30);
            $table->char('no_hp', 13);
            $table->string('status', 20);
            $table->integer('harga_keseluruhan');
            $table->unsignedBigInteger('id_diamond');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->timestamps();
            $table->foreign('id_diamond')->references('id')->on('diamond_game')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_diamonds');
    }
};
