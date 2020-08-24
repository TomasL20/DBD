<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RolPermission;

class RolPermissionController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $rolpermission = RolPermission::all()->where('eliminatedAt',null);
        return response()->json($rolpermission);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $newRP = new RolPermission();
        $newRP->idPer = $request->idPer;
        $newRP->idRol = $request->idRol;
        $newRP->save();
        return response()->json([
            "message"=> "Nuevo usuario-rol creado.",
            "idUserRolPermissionCreated"=> $newRP->id
        ],201);
    }

    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $rolpermission = RolPermission::find($id);
        if($rolpermission != NULL && $rolpermission->eliminatedAt == NULL){
            return response()->json($rolpermission);
        }
    }
    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $rolpermission = RolPermission::all()->where('eliminatedAt', "!=", null);
        return response()->json($rolpermission);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    //Elimina la tupla dependiendo del identificador entregado
    public function destroy($id)
    {
        $rolpermission = RolPermission::find($id);
        if($rolpermission != NULL ){
            $rolpermission->delete();
            return response()->json([
                "message"=> "Se elimina el rol-permiso.",
                "idRolPermission" => $rolpermission->id
            ]);   
        }
        return "No existe rol-permiso con esa ID";
    }
    //soft
    public function delete($id){
        $rolpermission = RolPermission::find($id);
        if($rolpermission != NULL && $rolpermission->eliminatedAt == NULL){
            
            $rolpermission->eliminatedAt = now();
            $rolpermission->save();
            return response()->json([
                "message"=> "Se elimina el rol-permiso. (soft)",
                "idRolPermission" => $rolpermission->id
            ]);   
        }
        return "No existe rol-permiso con esa ID";
    }
    //restore
    public function restore($id){
        $rolpermission = RolPermission::find($id);
        if($rolpermission != NULL && $rolpermission->eliminatedAt != NULL){
            $rolpermission->eliminatedAt = NULL;
            $rolpermission->save();
            return response()->json([
                "message"=> "Se ha restaurado el rol-permiso.",
                "idRolPermission" => $rolpermission->id
            ]);
        }
        return "El rol-permiso no existe o no está eliminado.";
    }
}
