<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function __invoke(): RedirectResponse | View
    {
        if (Auth::user()->admin) {
            return view('admin', [
                'real_estates' => DB::table('real_estates')->latest()->get(),
            ]);
        } else {
            return redirect('/');
        }
    }
}
