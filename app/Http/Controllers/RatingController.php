<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $rating = Rating::all()->where('eliminatedAt',null);
        return response()->json($rating);
    }

    public function create()
    {
        //
    }


    //Elimina la tupla dependiendo del identificador entregado 
    public function store(Request $request)
    {
        $newRating = new Rating();
        $newRating->rate = $request->rate;
        $newRating->comment = $request->comment;
        $newRating->commentDate = now();
        $newRating->save();
        return response()->json([
            
            "message"=> "Nueva valoración creada.",
            "idRatingCreated"=> $newRating->id
            
        ],201);
    }


    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $rating = Rating::find($id);
        if($rating != NULL && $rating->eliminatedAt == NULL){
            return response()->json($rating);
        }
        return "La valoración con esa ID no existe.";
    }

    public function edit($id)
    {
        //
    }

    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado 
    public function update(Request $request, $id)
    {
        $rating = Rating::findOrFail($id);
        if($rating != NULL && $rating->eliminatedAt == NULL){
            if ($request->get('rate') != NULL){
                $rating->rate = $request->get('rate');
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
        return "No existe valoración con esa ID.";
    }
    //soft
    public function delete($id){
        $rating = Rating::find($id);
        if($rating != NULL && $rating->eliminatedAt == NULL){
            $rating->eliminatedAt = now();
            $rating->save();
            return response()->json([
                "message"=> "Se elimina la valoración. (soft)",
                "idRating" => $rating->id
            ]);   
        }
        return "No existe anuncio con esa ID";
    }
    //restore
    public function restore($id){
        $rating = Rating::find($id);
        if($rating != NULL && $rating->eliminatedAt != NULL){
            $rating->eliminatedAt = NULL;
            $rating->save();
            return response()->json([
                "message"=> "Se ha restaurado la valoración.",
                "idRating" => $rating->id
            ]);
        }
        return "La valoración no existe o no está eliminado.";
    }
}
