<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RolUser;

class RolUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolUser = RolUser::all();
        return response()->json($rolUser);
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
        $rolUser = new RolUser();
        $rolUser->rol_id = $request->rol_id;
        $rolUser->user_id = $request->user_id;
        $rolUser->save();
        return response()->json($rolUser);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rolUser = RolUser::find($id);
        return $rolUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $rolUser = RolUser::find($id);

        if ($request->rol_id != NULL){
            $rolUser->rol_id = $request->rol_id;
        }
        if ($request->user_id != NULL){
            $rolUser->user_id = $request->user_id;
        }

        $rolUser->save();
        return response()->json($rolUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rolUser = RolUser::find($id);
        $rolUser->delete();
        return "El rolUsuario fue eliminado";
    }
}
