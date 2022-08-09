<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RealEstate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'square',
        'rooms',
        'dimensions',
        'cost',
        'image_uri',
    ];

    public function PhotosRealEstates(): HasMany
    {
        return $this->hasMany(PhotosRealEstates::class, 'foreign_key');
    }

}
