<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlokairuTaula extends Model
{
    /** @use HasFactory<\Database\Factories\AlokairuTaulaFactory> */
    use HasFactory;
    protected $fillable = [
        'izena',
        'etxea_id'
    ];     
}
