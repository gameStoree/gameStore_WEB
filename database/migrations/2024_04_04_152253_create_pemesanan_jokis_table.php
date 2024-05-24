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
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('id_paket');
            $table->integer('jumlah_bintang')->nullable();
            $table->integer('harga_keseluruhan')->nullable();
            $table->string('login_via', 20);
            $table->string('Id_Server', 30);
            $table->string('email_no_hp_montonID', 30);
            $table->string('password');
            $table->string('request_hero');
            $table->string('catatan_penjoki');
            $table->char('no_hp', 13);
            $table->string('status', 20);
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_worker')->nullable();
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
