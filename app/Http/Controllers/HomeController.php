<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('index', [
            'real_estates' => RealEstate::all(),
        ]);
    }
}
