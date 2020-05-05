<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostUser;

class UserController extends Controller
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

        $users = user::all();
            return [
                'success' => true,
                'users' => $users
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
    public function store(PostUser $request)
    {
        $input = $request->validate([
            'first_name' => 'required| max: 50',
            'last_name' => 'required|max: 50',
            'password' => 'required|max : 255',
            'mail' => 'required|max: 255'
        ]);

        $user = User::create($request -> input());
            return [
                'success' => true,
                'response' => $user
            ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $input = $request->input();
        $user->fill($input);
        $user->save();
        return [
            'success' => true,
            'user' => $user
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = user::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
