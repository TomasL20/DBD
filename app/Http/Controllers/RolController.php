<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $rol = Rol::all()->where('eliminatedAt',null);
        return response()->json($rol);
    }


    public function create()
    {
        //
    }


    //Elimina la tupla dependiendo del identificador entregado  
    public function store(Request $request)
    {
        $newRol = new Rol();
        $newRol->description= $request->description;
        $newRol->save();
        return response()->json([
            
            "message"=> "Nuevo rol creado.",
            "idRolCreated"=> $newRol->id
            
        ],201);
    }


    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $rol = Rol::find($id);
        if($rol != NULL && $rol->eliminatedAt == NULL){
            return response()->json($rol);
        }
        return "El rol con esa ID no existe.";
    }
    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $rol = Rol::all()->where('eliminatedAt', "!=", null);
        return response()->json($rol);
    }

    public function edit($id)
    {
        //
    }


    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        if($rol != NULL && $rol->eliminatedAt == NULL){
            if ($request->get('description') != NULL){
                $rol->description = $request->get('description');
            }
            $rol->save();
            return response()->json($rol);
        }
        return "El rol con esa ID no existe.";
    }

    //Elimina la tupla dependiendo del identificador entregado
    public function destroy($id)
    {
        $rol = Rol::find($id);
        if($rol != NULL){
            $rol->delete();
            return response()->json([
                "message"=> "Se elimina el rol.",
                "idRol" => $rol->id
            ]);   
        }
        return "No existe rol con esa ID.";
    }
    //soft
    public function delete($id){
        $rol = Rol::find($id);
        if($rol != NULL && $rol->eliminatedAt == NULL){
            $rol->eliminatedAt = now();
            $rol->save();
            return response()->json([
                "message"=> "Se elimina el rol. (soft)",
                "idRol" => $rol->id
            ]);   
        }
        return "No existe rol con esa ID.";
    }
    //restore
    public function restore($id){
        $rol = Rol::find($id);
        if($rol != NULL && $rol->eliminatedAt != NULL){
            $rol->eliminatedAt = NULL;
            $rol->save();
            return response()->json([
                "message"=> "Se ha restaurado el rol.",
                "idRol" => $rol->id
            ]);
        }
        return "El rol no existe o no está eliminado.";
    }
}
