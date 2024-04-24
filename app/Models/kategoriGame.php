<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriGame extends Model
{
    use HasFactory;

    protected $table = 'kategori_games';
    protected $fillable = ['nama_game', 'poster_game'];

}
