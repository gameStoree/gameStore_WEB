<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    use HasFactory;

    protected $table = "worker";
    protected $fillable = ['nama_lengkap', 'email', 'password', 'tggl_lahir', 'alamat', 'foto', 'high_rank', 'role'];
}
