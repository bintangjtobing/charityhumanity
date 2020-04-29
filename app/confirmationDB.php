<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confirmationDB extends Model
{
    protected $table = 'confirmationdb';
    protected $fillable = [
        'date',
        'nama',
        'notelp',
        'email',
        'jumlah_donasi',
        'senderbank',
        'sendername',
        'tobank',
        'receivedbank',
        'refnumber',
        'bukti',
        'notes',
    ];
}
