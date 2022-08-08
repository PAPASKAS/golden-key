<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;

class RealEstatesController extends Controller
{
    public function store(Request $request): void
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string','max:522'],
            'square' => ['required', 'integer'],
            'rooms' => ['required', 'integer'],
            'dimensions' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'integer'],
            'image_uri' => ['required'],
        ]);

        RealEstate::create([
            'name' => $request->name,
            'description' => $request->description,
            'square' => $request->square,
            'rooms' => $request->rooms,
            'dimensions' => $request->dimensions,
            'cost' => $request->cost,
            'image_uri' => $request->image_uri,
        ]);

    }
}
