<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('per_page')) {
            $this->perPage = $request->input('per_page');}

        $tournaments = Tournament::all();
            return [
                'success' => true,
                'tournaments' => $tournaments
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
    public function store(Request $request)
    {
        $input = $request->validate([
            'tournament_name' => 'required|max: 255',
            'date_from' => 'required|date',
            'date_to' => 'required|date'
        ]);

        $tournament = Tournament::create($input);
            return [
                'success' => true,
                'response' => $tournament
            ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        return [
            'success' => true,
            'tournament' => $tournament
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        $input = $request->input();
        $tournament->fill($input);
        $tournament->save();
        return [
            'success' => true,
            'tournament' => $tournament
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Tournament::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
