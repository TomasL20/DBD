<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $permission = Permission::all()->where('eliminatedAt',null);
        return response()->json($permission);
    }


    public function create()
    {
        //
    }

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

    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $permission = Permission::find($id);
        if($permission != NULL && $permission->eliminatedAt == NULL){
            return response()->json($permission);
        }
        return "El permiso con esa ID no existe.";
    }

    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $permission = Permission::all()->where('eliminatedAt', "!=", null);
        return response()->json($permission);
    }

    public function edit($id)
    {
        //
    }

    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);
        if($permission != NULL && $permission->eliminatedAt == NULL){
            if ($request->get('description') != NULL){
                $permission->description = $request->get('description');
            }
            $permission->save();
            return response()->json($permission);
        }
        return "El permiso con esa ID no existe.";
    }

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
        return "No existe permiso con esa ID.";

    }
    //soft
    public function delete($id){
        $permission = Permission::find($id);
        if($permission != NULL && $permission->eliminatedAt == NULL){
            $permission->eliminatedAt = now();
            $permission->save();
            return response()->json([
                "message"=> "Se elimina el permiso. (soft)",
                "idPermission" => $permission->id
            ]);   
        }
        return "No existe permiso con esa ID.";
    }
    //restore
    public function restore($id){
        $permission = Permission::find($id);
        if($permission != NULL && $permission->eliminatedAt != NULL){
            $permission->eliminatedAt = NULL;
            $permission->save();
            return response()->json([
                "message"=> "Se ha restaurado el permiso.",
                "idPermission" => $permission->id
            ]);
        }
        return "El permiso no existe o no está eliminado.";
    }
}
