<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Assessment;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $assessment = Assessment::all();
        return $assessment;
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
            'score' => 'required',
            'date' => 'required|date',
            'comment' => 'required|max:500',
        ]);   
        $assessment = new Assessment();
        $assessment->score = $request->score;
        $assessment->date = $request->date;
        $assessment->comment = $request->comment;
        $assessment->publication_id = $request->publication_id;
        $assessment->purchase_id = $request->purchase_id;
        $assessment->active = 'true';
        $assessment->save();
        return response()->json($assessment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assessment = Assessment::find($id);
        return $assessment;
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
        $assessment = Assessment::find($id);

        if ($request->score != NULL){
            $assessment->score = $request->score;
        }
        if ($request->date != NULL){
            $assessment->date = $request->date;
        }
        if ($request->comment != NULL){
            $assessment->comment = $request->comment;
        }
        if ($request->publication_id != NULL){
            $assessment->publication_id = $request->publication_id;
        }
        if ($request->purchase_id != NULL){
            $assessment->purchase_id = $request->purchase_id;
        }

        $assessment->save();
        return response()->json($assessment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assessment = Assessment::find($id);
        $assessment->delete();
        return "La evaluacion fue eliminada";
    }

    public function delete($id)
    {
        $assessment = Assessment::find($id);
        $assessment->active = 'false';
        $assessment->save();
        return response()->json($assessment);
    } 
}
