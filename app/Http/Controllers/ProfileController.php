<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        dump(auth()->user()->email);
        dump(\Auth::user()->id);
        dump(\Auth::user()->name);
    }
}
