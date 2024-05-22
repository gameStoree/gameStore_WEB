<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesananJoki extends Model
{
    use HasFactory;

    protected $table = 'pemesanan_jokis';
    protected $fillable = ['id_paket', 'login_via', 'Id_server', 'email_no_hp_montonID', 'password', 'request_hero', 'catatan_penjoki',
                        'no_hp', 'status', 'id_user', 'id_worker'];
}
