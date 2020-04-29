<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donationDB extends Model
{
    protected $table = 'donations';
    protected $fillable = [
        'refnumber',
        'jumlah_donasi', 'metode', 'nama_donatur', 'email', 'note', 'logIp',
    ];
}
