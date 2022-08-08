<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'square',
        'rooms',
        'dimensions',
        'cost',
        'image_uri',
    ];
}
