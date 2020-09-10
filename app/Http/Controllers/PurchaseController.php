<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $purchase = Purchase::all();
        $sorted = $purchase->sortBy('id');
        return $sorted;
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
            'paymentMethod' => 'required',
            'card' => 'required',
            'startdate' => 'required|date',
            'finishdate' => 'required|date',
            'deadline' => 'required|date',
        ]);

        $purchase = new Purchase();
        $purchase->paymentMethod = $request->paymentMethod;
        $purchase->card = $request->card;
        $purchase->startdate = $request->startdate;
        $purchase->finishdate = $request->finishdate;
        $purchase->deadline = $request->deadline;
        $purchase->user_id = $request->user_id;
        $purchase->publication_id = $request->publication_id;
        $purchase->active = 'true';
        $purchase->save();
        return response()->json($purchase);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchase = Purchase::find($id);
        return $purchase;
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
        $purchase = Purchase::find($id);

        if ($request->paymentMethod != NULL){
            $purchase->paymentMethod = $request->paymentMethod;
        }
        if ($request->card != NULL){
            $purchase->card = $request->card;
        }
        if ($request->startdate != NULL){
            $purchase->startdate = $request->startdate;
        }
        if ($request->finishdate != NULL){
            $purchase->finishdate = $request->finishdate;
        }
        if ($request->deadline != NULL){
            $purchase->deadline = $request->deadline;
        }
        if ($request->user_id != NULL){
            $purchase->user_id = $request->user_id;
        }
        if ($request->publication_id != NULL){
            $purchase->publication_id = $request->publication_id;
        }

        $purchase->save();
        return response()->json($purchase);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = Purchase::find($id);
        $purchase->delete();
        return "La compra fue eliminada";
    }

    public function delete($id)
    {
        $purchase = Purchase::find($id);
        $purchase->active = 'false';
        $purchase->save();
        return response()->json($purchase);
    } 
}
