<?php

namespace App\Http\Controllers;

use App\Swatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SwatchController extends Controller
{
    /**
     * Swatches
     */
    public $swatches;

    /**
     * Logged in user required on all route methods except index|show
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Swatch $swatch)
    {
        $swatches = $swatch->latest()->paginate(6);


        return view('index', compact('swatches'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gradient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validate(
            request(),
            [
                'title' => 'required|string|min:3|max:255',
                'gradientTxt'=> 'required|string',
                'colorvals'=> 'required|string',
                'direction'=>'required|numeric',
                'handlers'=>'required||string'
            ]
        );

        $attributes['owner_id'] = Auth::user()->id;

        $swatch = Swatch::create(
            [
                'owner_id' => $attributes['owner_id'],
                'title' => $request->title,
                'gradient' => $request->gradientTxt,
                'colorvals'=> $request->colorvals,
                'direction'=> $request->direction,
                'handlers'=> $request->handlers
            ]
        );
        $status  = (bool) $swatch;

        $message =$status ? 'Swatch ('.$attributes['title'].') Created!' : 'Error Creating swatch';
        return redirect('/')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Swatch  $swatch
     * @return \Illuminate\Http\Response
     */
    public function show(Swatch $swatch)
    {
        $swatch = compact('swatch');

        //dd($swatch);
        return view('showGradient', $swatch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Swatch  $swatch
     * @return \Illuminate\Http\Response
     */
    public function edit(Swatch $swatch)
    {
        $swatch = compact('swatch');
        return view('editGradient', $swatch);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Swatch  $swatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Swatch $swatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Swatch  $swatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Swatch $swatch)
    {
        // dd($swatch->id);
        $status=$swatch->delete($swatch->id);

        $message =$status ? 'Swatch deleted!' : 'Error deleting swatch';

        return redirect('home')->with('message', $message);
    }
}
