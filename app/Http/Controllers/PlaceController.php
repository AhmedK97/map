<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Traits\avgTrait;

class PlaceController extends Controller
{
    use avgTrait;
    public $place;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Place $place)
    {
        $this->place = $place;
    }
    public function index()
    {
        $places = $this->place->orderBy('view_count', 'desc')->take(3)->get();

        return view('welcome', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        $place = $place->withCount('reviews')->find($place->id);
        //  $avg = $place->reviews()->dd();
        $rating = $this->avgRating($place);
        // dd($rating);
        $total =  $rating['total'];
        $quality =  $rating['quality'];
        $service =   $rating['service'];
        $cleanliness = $rating['cleanliness'];
        $pricing = $rating['pricing'];
        // return($rating) ?? 'null';

        return view('details', compact('place', 'total', 'quality', 'service', 'cleanliness', 'pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
