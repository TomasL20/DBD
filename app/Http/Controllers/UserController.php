<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $user = User::all()->where('eliminatedAt',null);
        return response()->json($user);
    }


    public function create()
    {
        //
    }


    //Crea una nueva columna(tupla) con el id creado, especificando los campos debido al $request pasado como parametro
    public function store(Request $request)
    {
        $newUser= new User();
        $newUser->userName = $request->userName;
        $newUser->realName = $request->realName;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->save();
        return response()->json([
            
            "message"=> "Nuevo usuario creado.",
            "idUserCreated"=> $newUser->id
            
        ],201);
    }


    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $user = User::find($id);
        if($user != NULL && $user->eliminatedAt == NULL){
            return response()->json($user);
        }
        return "El usuario con esa ID no existe.";
    }

    public function edit($id)
    {
        //
    }


    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if($user != NULL && $user->eliminatedAt == NULL){
            if ($request->get('userName') != NULL){
                $user->userName = $request->get('userName');
            }
            if ($request->get('realName') != NULL){
                $user->realName = $request->get('realName');
            }
            if ($request->get('email') != NULL){
                $user->email = $request->get('email');
            }
            if ($request->get('password') != NULL){
                $user->password = $request->get('password');
            }
            $user->save();
            return response()->json($user);
        }
        return "El usuario con esa ID no existe";
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
        $user = User::find($id);
        if($user != NULL){
            $user->delete();
            return response()->json([
                "message"=> "Se elimina el usuario.",
                "idUser" => $user->id
            ]);   
        }
        return "No existe usuario con esa ID";
    }
    //soft
    public function delete($id){
        $user = User::find($id);
        if($user != NULL && $user->eliminatedAt == NULL){
            $user->eliminatedAt = now();
            $user->save();
            return response()->json([
                "message"=> "Se elimina el usuario. (soft)",
                "idUser" => $user->id
            ]);   
        }
        return "No existe usuario con esa ID";
    }
    //restore
    public function restore($id){
        $user = User::find($id);
        if($user != NULL && $user->eliminatedAt != NULL){
            $user->eliminatedAt = NULL;
            $user->save();
            return response()->json([
                "message"=> "Se ha restaurado el usuario.",
                "idUser" => $user->id
            ]);
        }
        return "El usuario no existe o no está eliminado.";
    }
}
