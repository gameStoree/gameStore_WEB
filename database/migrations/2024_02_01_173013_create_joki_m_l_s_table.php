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
        Schema::create('joki_m_l', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('joki_rank');
            $table->integer('harga_joki');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joki_m_l');
    }
};
