<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heavydivisions extends Model
{
    use HasFactory;

    protected $fillable = [
        'boxer',
        'weight',
        'class',
        'rates_id',
        'boxersid'
    ];
}
