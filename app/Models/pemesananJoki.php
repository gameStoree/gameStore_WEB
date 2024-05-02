<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesananJoki extends Model
{
    use HasFactory;

    protected $table = 'pemesanan_jokis';
    protected $fillable = ['id_paket', 'login_via', 'nickname_ml', 'email_no_hp_montonID', 'password', 'request_hero', 'catatan_penjoki', 'metode_pembayaran', 'bukti_tf',
                            'no_hp', 'status', 'id_user', 'id_worker'];


    /**
     * Method to search orders by ID
     *
     * @param int $orderId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function searchById($orderId)
    {
        return static::where('id', $orderId)->get();
    }

}
