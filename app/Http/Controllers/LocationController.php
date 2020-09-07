<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $location = Location::all();
        return $location;
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
        $validatedData = $request->validate([
            'region' => 'required|max:20',
            'commune' => 'required|max:20',
            'street' => 'required|max:50',
        ]);
        $location = new Location();
        $location->region = $request->region;
        $location->commune = $request->commune;
        $location->street = $request->street;
        $location->active = 'true';
        $location->save();
        return response()->json($location);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::find($id);
        return $location;
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
        $location = Location::find($id);

        if ($request->region != NULL){
            $location->region = $request->region;
        }
        if ($request->commune != NULL){
            $location->commune = $request->commune;
        }
        if ($request->street != NULL){
            $location->street = $request->street;
        }

        $location->save();
        return response()->json($location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        return "La localizacion fue eliminada";
    }

    public function delete($id)
    {
        $location = Location::find($id);
        $location->active = 'false';
        $location->save();
        return response()->json($location);
    } 
}
