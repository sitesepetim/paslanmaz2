<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fiyatListesi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'kalite',
        'kalinlik',
        'ebat',
        'kg',
        'birim',
        'plaka',
        'type',
    ];
}
