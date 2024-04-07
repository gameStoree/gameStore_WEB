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
        Schema::create('worker', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lengkap", 30);
            $table->string("email", 30);
            $table->string("password", 8);
            $table->date("tggl_lahir");
            $table->char("no_hp", 13);
            $table->text("alamat", 50);
            $table->string("foto", 50);
            $table->string("high_rank", 20);
            $table->string("role", 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker');
    }
};
