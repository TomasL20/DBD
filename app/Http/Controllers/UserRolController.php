<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRol;

class UserRolController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $userrol = UserRol::all()->where('eliminatedAt',null);
        return response()->json($userrol);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $newUR = new UserRol();
        $newUR->idUser = $request->idUser;
        $newUR->idRol = $request->idRol;
        $newUR->save();
        return response()->json([
            "message"=> "Nuevo usuario-rol creado.",
            "idUserRolCreated"=> $newUR->id
        ],201);
    }
    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $userrol = UserRol::find($id);
        if($userrol != NULL && $userrol->eliminatedAt == NULL){
            return response()->json($userrol);
        }
    }
    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $userrol = UserRol::all()->where('eliminatedAt', "!=", null);
        return response()->json($userrol);
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
       $userrol = UserRol::find($id);
       if($userrol != NULL ){
           $userrol->delete();
           return response()->json([
               "message"=> "Se elimina el user-rol.",
               "idUserRol" => $userrol->id
           ]);   
       }
       return "No existe user-rol con esa ID";
   }
   //soft
   public function delete($id){
       $userrol = UserRol::find($id);
       if($userrol != NULL && $userrol->eliminatedAt == NULL){
           
           $userrol->eliminatedAt = now();
           $userrol->save();
           return response()->json([
               "message"=> "Se elimina el user-rol. (soft)",
               "idUserRol" => $userrol->id
           ]);   
       }
       return "No existe user-rol con esa ID";
   }
   //restore
   public function restore($id){
       $userrol = userrol::find($id);
       if($userrol != NULL && $userrol->eliminatedAt != NULL){
           $userrol->eliminatedAt = NULL;
           $userrol->save();
           return response()->json([
               "message"=> "Se ha restaurado el user-rol.",
               "idUserRol" => $userrol->id
           ]);
       }
       return "El user-rol no existe o no está eliminado.";
   }
}
