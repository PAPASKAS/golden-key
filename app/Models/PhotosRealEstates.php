<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotosRealEstates extends Model
{
    use HasFactory;

    public function RealEstate(): BelongsTo
    {
        return $this->belongsTo(RealEstate::class);
    }
}
