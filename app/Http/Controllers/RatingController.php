<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $rating = Rating::all()->where('eliminatedAt',null);
        return response()->json($rating);
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

    //Elimina la tupla dependiendo del identificador entregado 
    public function store(Request $request)
    {
        $newRating = new Rating();
        $newRating->rate = $request->rate;
        $newRating->comment = $request->comment;
        $newRating->commentDate = $request->commentDate;
        $newRating->save();
        return response()->json([
            
            "message"=> "Nueva valoración creada.",
            "idRatingCreated"=> $newRating->id
            
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $rating = Rating::find($id);
        $rating->where('eliminatedAt',null);
        return response()->json($rating);
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

    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado 
    public function update(Request $request, $id)
    {
        $rating = rating::findOrFail($id);
        $rating->where('eliminatedAt',null);
        if($rating != NULL){
            if ($request->get('rating') != NULL){
                $rating->rating = $request->get('rating');
            }
            if ($request->get('comment') != NULL){
                $rating->comment = $request->get('comment');
            }
            if ($request->get('commentDate') != NULL){
                $rating->commentDate = $request->get('commentDate');
            }
            $rating->save();
            return response()->json($rating);
        }
        return "La valoración con esa ID no existe.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Elimina la tupla dependiendo del identificador entregado 
    public function destroy($id)
    {
        $rating = Rating::find($id);
        if($rating != NULL){
            $rating->delete();
            return response()->json([
                "message"=> "Se elimina la valoración.",
                "idRating" => $rating->id
            ]);   
        }
        return "No existe valoración con esa ID";
    }
}
