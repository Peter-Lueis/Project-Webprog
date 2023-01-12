<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;
    protected $table='destination';
    protected $fillable = [
        'image',
        'name',
        'desc',
    ];
}