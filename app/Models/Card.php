<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_kartu',
        'name',
        'alamat',
        'lahir',
        'nik',
        'fasilitas',
    ];
}
