<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $user = User::all();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'lastname' => 'required|max:20',
            'email' => 'required|unique:users',
            'password' => 'required',
            'description' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->description = $request->description;
        $user->active = 'true';
        $user->save();
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->name != NULL){
            $user->name = $request->name;
        }
        if ($request->lastname != NULL){
            $user->lastname = $request->lastname;
        }
        if ($request->email != NULL){
            $user->email = $request->email;
        }
        if ($request->password != NULL){
            $user->password = $request->password;
        }
        if ($request->description != NULL){
            $user->description = $request->description;
        }

        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return "El usuario fue eliminado";
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->active = 'false';
        $user->save();
        return response()->json($user);
    }    
}
