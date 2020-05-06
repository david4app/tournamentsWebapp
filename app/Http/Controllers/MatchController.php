<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    protected $perPage = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('per_page')) {
            $this->perPage = $request->input('per_page');
        }
        $matches = Match::with(['homeTeam', 'awayTeam'])->paginate($this->perPage);
        // match.homeTeam.name
        // match.awayTeam.name
        // $matches = Match::paginate();
        return ['success' => true, 'matches' => $matches];
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
            'match_date' => 'required|date',
            'score' => 'required',
            'hometeam_id' => 'required',
            'awayteam_id' => 'required',
            'tournament_id' => 'required'
            
        ]);

        $match = Match::create($input);
            return [
                'success' => true,
                'response' => $match
            ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $match = Match::with(['homeTeam', 'awayTeam', 'tournament'])->find($id);
        return [
            'success' => true,
            'match' => $match
        ];
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {

        $input = $request->input();
        $match->fill($input);
        $match->save();
        return [
            'success' => true,
            'match' => $match
        ];

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Match::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
