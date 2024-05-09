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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 30);
            $table->string('email', 30)->unique();
            $table->string('password', 60);
            $table->char('no_hp', 13);
            $table->text('alamat')->nullable();
            $table->string('foto_user')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role', ['admin', 'worker', 'customer'])->default('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
