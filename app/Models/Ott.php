<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ott extends Model
{
    use HasFactory;
    protected $table = 'otts';
    protected $fillable = [
        'ott_name',
        'ott_logo',
    ];
}
