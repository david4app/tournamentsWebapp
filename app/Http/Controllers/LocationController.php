<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\PostLocation;

class LocationController extends Controller

{
    protected $perpage = 20;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('per_page')) {
            $this->perPage = $request->input('per_page');}

        $locations = Location::all();
            return [
                'success' => true,
                'locations' => $locations
            ];
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
    public function store(PostLocation $request)
    {   

        $input = $request->validate([
            'zip' => 'required',
            'town' => 'required|max: 255',
            'street' => 'required|max : 255'
        ]);

        $location = Location::create($request -> input());
            return [
                'success' => true,
                'response' => $location
            ];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return [
            'success' => true,
            'location' => $location
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $input = $request->input();
        $location->fill($input);
        $location->save();
        return [
            'success' => true,
            'location' => $location
        ];
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = location::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
