<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'email',
        'nama_restaurant',
        'akreditasi',
        'jenis_restaurant',
        'alamat',
        'no_telp',
        'image',
        'waktu_buka',
        'waktu_tutup',
    ];
}
