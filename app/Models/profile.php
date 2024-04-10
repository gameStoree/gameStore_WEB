<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = ['nama_lengkap', 'email', 'password', 'no_hp', 'alamat', 'foto_user', 'role'];
}
