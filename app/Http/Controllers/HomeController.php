<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('test');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $countries = Country::withCount('employees')->having('employees_count', '>', 0)->where('name', 'like', 'A%')->get();

        return view('test', compact('countries'));
    }
}
