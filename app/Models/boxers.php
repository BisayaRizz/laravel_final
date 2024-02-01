<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boxers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'age',
        'gender',
        'nationality',
        'division',
        'nickname'
    ];
}
