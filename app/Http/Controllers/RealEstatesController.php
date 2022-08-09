<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

# TODO: fix delete file. It's not working
class RealEstatesController extends Controller
{
    public function show(Request $request, int $id): View
    {
        return view('real-estate.show', [
            'real_estate' => RealEstate::findOrFail($id),
        ]);
    }

    public function update(Request $request, int $id): void
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string','max:522'],
            'square' => ['required', 'integer'],
            'rooms' => ['required', 'integer'],
            'dimensions' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'integer'],
            'image_uri' => [File::types(['jpg', 'jpeg', 'png', 'webp'])],
        ]);

        if ($request->image_uri) {
            // delete old file
            $file = RealEstate::find($id)->image_uri;
            Storage::disk('public')->delete('images/real-estates', $file);
            // upload new file
            $new_file = Storage::disk('public')->put('images/real-estates', $request->file('image_uri'));

            RealEstate::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'square' => $request->square,
                'rooms' => $request->rooms,
                'dimensions' => $request->dimensions,
                'cost' => $request->cost,
                'image_uri' =>  mb_substr($new_file, 20),
            ]);
        } else {
            RealEstate::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'square' => $request->square,
                'rooms' => $request->rooms,
                'dimensions' => $request->dimensions,
                'cost' => $request->cost,
            ]);
        }
    }

    public function store(Request $request): void
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string','max:522'],
            'square' => ['required', 'integer'],
            'rooms' => ['required', 'integer'],
            'dimensions' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'integer'],
            'image_uri' => ['required', File::types(['jpg', 'jpeg', 'png', 'webp'])],
        ]);

        $file_name = Storage::disk('public')->put('images/real-estates', $request->file('image_uri'));

        RealEstate::create([
            'name' => $request->name,
            'description' => $request->description,
            'square' => $request->square,
            'rooms' => $request->rooms,
            'dimensions' => $request->dimensions,
            'cost' => $request->cost,
            'image_uri' => mb_substr($file_name, 20),
        ]);
    }

    public function destroy (int $id): void
    {
        if (Auth::user()->admin) {
            $file = RealEstate::find($id)->image_uri;
            Storage::disk('public')->delete('images/real-estates' . $file);
            RealEstate::destroy($id);
        }
    }
}
