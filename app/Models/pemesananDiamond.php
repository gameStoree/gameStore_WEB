<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pemesananDiamond extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = "pemesanan_diamonds";
    protected $fillable = ['id', 'id_server', 'harga_keseluruhan', 'no_hp', 'status', 'id_diamond', 'id_user'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = self::generateCustomId();
        });
    }

    public static function generateCustomId()
    {
        $prefix = 'INVD';
        $randomString = strtoupper(Str::random(8));
        return $prefix . $randomString;
    }
}
