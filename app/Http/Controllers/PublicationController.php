<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $publication = Publication::all();
        return $publication;
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
            'description' => 'required|max:500',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $publication = new Publication();
        $publication->description = $request->description;
        $publication->price = $request->price;
        $publication->stock = $request->stock;
        $publication->category_id = $request->category_id;
        $publication->locate_id = $request->locate_id;
        $publication->user_id = $request->user_id;
        $publication->active = 'true';
        $publication->save();
        return response()->json($publication);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::find($id);
        return $publication;
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
        $publication = Publication::find($id);

        if ($request->description != NULL){
            $publication->description = $request->description;
        }
        if ($request->price != NULL){
            $publication->price = $request->price;
        }
        if ($request->stock != NULL){
            $publication->stock = $request->stock;
        }
        if ($request->category_id != NULL){
            $publication->category_id = $request->category_id;
        }
        if ($request->locate_id != NULL){
            $publication->locate_id = $request->locate_id;
        }
        if ($request->user_id != NULL){
            $publication->user_id = $request->user_id;
        }

        $publication->save();
        return response()->json($publication);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = Publication::find($id);
        $publication->delete();
        return "La publicacion fue eliminada";
    }

    public function delete($id)
    {
        $publication = Publication::find($id);
        $publication->active = 'false';
        $publication->save();
        return response()->json($publication);
    } 
}
