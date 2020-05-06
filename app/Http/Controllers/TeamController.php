<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Requests\PostTeam;


class TeamController extends Controller
{
    protected $perpage = 20;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->has('per_page'))
          {  $this->perPage = $request->input('per_page');}

    $teams = Team::all();
        return [
            'success' => true,
            'teams' => $teams
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
            'team_name' => 'required|max: 50',
            'points' => 'required'
        ]);

        $team = Team::create($request -> input());
            return [
                'success' => true,
                'response' => $team
            ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return [
            'success' => true,
            'team' => $team
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {     
        $input = $request->input();
        $team->fill($input);
        $team->save();
        return [
            'success' => true,
            'team' => $team
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = team::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
