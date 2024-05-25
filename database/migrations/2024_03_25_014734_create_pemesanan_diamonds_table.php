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
            $table->string('id', 12)->primary();
            $table->string('id_server', 30);
            $table->char('no_hp', 13);
            $table->string('status', 20);
            $table->unsignedBigInteger('id_diamond');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_diamond')->references('id')->on('diamond_game');
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
