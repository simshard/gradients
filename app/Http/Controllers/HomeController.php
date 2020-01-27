<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Swatch;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Swatch $swatch)
    {
         // $swatches=auth()->user()->swatches;
         $swatches= Swatch::where('owner_id', '=', Auth::user()->id)->get();
        return view('home', compact('swatches'));
    }
}
