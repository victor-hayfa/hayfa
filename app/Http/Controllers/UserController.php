<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return User::where('account_id', $request->account_id)->with('level')->get();
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
         // Verifica se já existe um usuário com o mesmo e-mail
         $existingUser = User::where('email', $request->email)->first();

         if ($existingUser) {
             return response()->json(['status' => 'error', 'message' => 'Já existe um usuário com esse e-mail.'], 422);
         }
         else {
            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->color = $request->color;
            $user->level_id = $request->level_id;
            $user->password = Hash::make($request->password);
            $user->status = $request->status ? 1 : 0;
            $user->account_id = $request->account_id;

            $user->save();

            return ['status' => 'success'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (is_null($request->password)) {
            User::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'color' => $request->color,
                    'status' => $request->status,
                    'level_id' => $request->level_id,
                ]
            );
        } else {
            User::where('id', $id)
                ->update(
                    [
                        'name' => $request->name,
                        'email' => $request->email,
                        'color' => $request->color,
                        'password' => Hash::make($request->password),
                        'status' => $request->status,
                        'level_id' => $request->level_id
                    ]
                );
        }

        return ['status' => 'success'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::where('id', $user->id);

        $user->delete();

        return ['status' => 'success'];
    }

    public function showUser(Request $request)
    {
        return User::with('account')->with('level')->where('email', $request->username)->get();
    }
}
