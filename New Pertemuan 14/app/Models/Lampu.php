<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampu extends Model
{
    use HasFactory;

    protected $table = 'lampu';
    protected $fillable = [
        'merklampu',
        'hargalampu',
        'tersedia',
        'berat'
    ];

    protected $casts = [
        'tersedia' => 'boolean'
    ];
}