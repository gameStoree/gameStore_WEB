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
        Schema::create('pemesanan_diamond', function (Blueprint $table) {
            $table->char('id_transaksi_topUp', 10)->primary();
            $table->integer('id_game');
            $table->string('metode_pembayaran');
            $table->string('bukti_tf');
            $table->char('no_hp', 13);
            $table->string('status', 20);
            $table->unsignedBigInteger('id_diamond');
            $table->unsignedBigInteger('id_user');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_diamond');
    }
};
