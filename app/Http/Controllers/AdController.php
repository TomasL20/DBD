<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $ad = Ad::all()->where('eliminatedAt',null);
        return response()->json($ad);
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

    //Crea una nueva columna(tupla) con el id creado, especificando los campos debido al $request pasado como parametro
    public function store(Request $request)
    {
        $newAd = new Ad();
        $newAd->description = $request->description;
        $newAd->descName = $request->descName;
        $newAd->arrInfo = $request->arrInfo;
        $newAd->price = $request->price;
        $newAd->stock = $request->stock;
        $newAd->status = $request->status;
        $newAd->location = $request->location;
        $newAd->save();
        return response()->json([
            
            "message"=> "Nuevo anuncio creado.",
            "idAdCreated"=> $newAd->id
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
        $ad = Ad::find($id);
        $ad->where('eliminatedAt',null);
        return response()->json($ad);
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
        $ad = Ad::find($id);
        $ad->where('eliminatedAt',null);
        if($ad != NULL){
            if ($request->get('description') != NULL){
                $ad->description = $request->get('description');
            }
            if ($request->get('descName') != NULL){
                $ad->descName = $request->get('descName');
            }
            if ($request->get('arrInfo') != NULL){
                $ad->arrInfo = $request->get('arrInfo');
            }
            if ($request->get('stock') != NULL){
                $ad->stock = $request->get('stock');
            }
            if ($request->get('status') != NULL){
                $ad->status = $request->get('status');
            }
            if ($request->get('location') != NULL){
                $ad->location = $request->get('location');
            }
            $ad->save();
            return response()->json($ad);
        }
        return "No existe anuncio con esa ID.";
    }
    //retorna la salida modificada en formato Json
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Elimina la tupla dependiendo del identificador entregado
    public function destroy($id)
    {
        $ad = Ad::find($id);
        $ad->where('eliminatedAt',null);
        if($ad != NULL){
            $ad->delete();
            return response()->json([
                "message"=> "Se elimina el anuncio.",
                "idAd" => $ad->id
            ]);   
        }
        return "No existe anuncio con esa ID";
    }
    //soft
    public function delete($id){
        $ad = Ad::find($id);
        $ad->where('eliminatedAt',null);
        if($ad != NULL){
            $ad->eliminatedAt = now();
            $ad->save();
            return response()->json([
                "message"=> "Se elimina el anuncio. (soft)",
                "idAd" => $ad->id
            ]);   
        }
        return "No existe anuncio con esa ID";
    }
    //restore
    public function restore($id){
        $ad = Ad::find($id);
        $ad->where('eliminatedAt',"!=",null);
        if($ad != NULL){
            $ad->eliminatedAt = NULL;
            $ad->save();
            return response()->json([
                "message"=> "Se ha restaurado el anuncio.",
                "idAd" => $ad->id
            ]);
        }
        return "El anuncio no existe o no está eliminado.";
    }
}
