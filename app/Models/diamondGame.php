<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diamondGame extends Model
{
    use HasFactory;

    protected $table = "diamond_game";
    protected $fillable = ['nama_game', 'jumlah_diamond', 'harga_diamond'];
}
