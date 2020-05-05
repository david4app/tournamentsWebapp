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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $match = Match::find($id);
        $match->score = 'New score';
        $match->save();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        $match -> delete();
        return $this -> success();
    }
}
