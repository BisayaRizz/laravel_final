<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stats extends Model
{
    use HasFactory;

    protected $fillable = [
        'boxer_name',
        'height',
        'weight',
        'weight_class',
        'reach',
        'ape_index',
        'stance',
        'boxersid'
    ];
}
