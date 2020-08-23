<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $permission = Permission::all()->where('eliminatedAt',null);
        return response()->json($permission);
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
        $newPermission = new Permission();
        $newPermission->description = $request->description;
        $newPermission->save();
        return response()->json([
            "message"=> "Nuevo permiso creado.",
            "idPermissionCreated"=> $newPermission->id
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
        $permission = Permission::find($id);
        $permission->where('eliminatedAt',null);
        return response()->json($permission);
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
        $permission = Permission::findOrFail($id);
        $permission->where('eliminatedAt',null);
        if($permission != NULL){
            if ($request->get('description') != NULL){
                $permission->description = $request->get('description');
            }
            $permission->save();
            return response()->json($permission);
        }
        return "El permiso con esa ID no existe";
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
        $permission = Permission::find($id);
        if($permission != NULL){
            $permission->delete();
            return response()->json([
                "message"=> "Se elimina el permiso.",
                "idAd" => $permission->id
            ]);   
        }
        return "No existe permiso con esa ID";

    }
}
