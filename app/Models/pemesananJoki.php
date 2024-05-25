<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pemesananJoki extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_paket', 'jumlah_bintang', 'harga_keseluruhan', 'login_via', 'Id_Server',
        'email_no_hp_montonID', 'password', 'request_hero', 'catatan_penjoki', 'no_hp',
        'status', 'id_user', 'id_worker'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = self::generateCustomId();
        });
    }

    public static function generateCustomId()
    {
        $prefix = 'INVJ';
        $randomString = strtoupper(Str::random(8));
        return $prefix . $randomString;
    }
}
