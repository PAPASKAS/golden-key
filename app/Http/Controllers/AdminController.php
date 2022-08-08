<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __invoke()
    {
        if (Auth::user()->admin) {
            return view('admin', [
                'real_estates' => DB::table('real_estates')->get(),
            ]);
        } else {
            return redirect('/');
        }
    }
}
