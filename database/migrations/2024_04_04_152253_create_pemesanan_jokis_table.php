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
        Schema::create('pemesanan_jokis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paket');
            $table->string('login_via', 20);
            $table->string('Id_Server', 30);
            $table->string('email_no_hp_montonID', 30);
            $table->string('password');
            $table->string('request_hero');
            $table->string('catatan_penjoki');
            $table->string('metode_pembayaran');
            $table->string('bukti_tf');
            $table->char('no_hp', 13);
            $table->string('status', 20);
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_worker');
            $table->timestamps();

            $table->foreign('id_paket')->references('id')->on('joki_m_l');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_worker')->references('id')->on('worker');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_jokis');
    }
};
