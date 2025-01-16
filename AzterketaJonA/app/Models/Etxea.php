<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etxea extends Model
{
    /** @use HasFactory<\Database\Factories\EtxeaFactory> */
    use HasFactory;

    protected $fillable = [
        'helbidea',
        'logelaKopurua',
        'eraikuntzaUrtea',
    ];       
}
