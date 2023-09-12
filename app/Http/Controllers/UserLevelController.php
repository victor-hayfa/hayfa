<?php

namespace App\Http\Controllers;

use App\UserLevel;
use Illuminate\Http\Request;

class UserLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return UserLevel::where('account_id', $request->account_id)->get();
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
        $userLevel = new UserLevel;

        $userLevel->name = $request->name;
        $userLevel->status = $request->status;
        $userLevel->account_id = $request->account_id;

        $userLevel->save();

        return ['status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function show(UserLevel $userLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLevel $userLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userLevel = UserLevel::where('id', $id)->first();

        $userLevel->name = $request->name;
        $userLevel->status = $request->status ? 1 : 0;

        $userLevel->save();

        return ['status' => 'success'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userLevel = UserLevel::where('id', $id);

        $userLevel->delete();

        return ['status' => 'success'];
    }

     /**
     * Listagem do filtro de nivel de usuario
     *
     */
    public function listFilter(Request $request)
    {
        // info($request->account_id);
        return UserLevel::where('account_id', $request->account_id)->with('users')->where('status', true)->get();
    }
}
