<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $rol = Rol::all();
        return response()->json($rol);
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
        $newRol = new Rol();
        $newRol->description= $request->description;
        return response()->json([
            
            "message"=> "Nuevo rol creado.",
            "idRolCreated"=> $newRol->id
            
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
        $rol = Rol::find($id);
        return response()->json($rol);
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
        $rol = rol::findOrFail($id);
        if ($request->get('description') != NULL){
            $rol->description = $request->get('description');
        }
        $rol->save();
        return response()->json($rol);
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
        $rol = Ad::find($id);
        if($rol != NULL){
            $rol->delete();
            return response()->json([
                "message"=> "Se elimina el rol.",
                "idRol" => $rol->id
            ]);   
        }
        return "No existe rol con esa ID";
    }
}
