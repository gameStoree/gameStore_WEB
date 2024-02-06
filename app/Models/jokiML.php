<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jokiML extends Model
{
    use HasFactory;

    protected $table = 'joki_m_l';
    protected $fillable = ['nama_paket', 'joki_rank', 'harga_joki'];
}
