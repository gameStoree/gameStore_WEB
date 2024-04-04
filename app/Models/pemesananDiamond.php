<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesananDiamond extends Model
{
    use HasFactory;

    protected $table = "pemesanan_diamonds";
    protected $fillable = ['id_game', 'metode_pembayaran', 'bukti_tf', 'no_hp', 'status', 'id_diamond', 'id_user'];
}
