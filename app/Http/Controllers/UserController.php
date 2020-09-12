<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Egulias\EmailValidator\Validation\RFCValidation;

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
        $validatedData =  $request->validate([
            'usernameInput' => 'required|min:4|max:26',
            'nameInput' => 'required|min:6|max:100',
            'emailInput' => 'email:rfc',
            'passwordInput' => 'required|min:4|max:26',
        ]);
        $newUser->userName = $request->usernameInput;
        $newUser->realName = $request->nameInput;
        $newUser->email = $request->emailInput;
        $newUser->password = $request->passwordInput;
        $newUser->save();
        return view('login');
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

    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $user = User::all()->where('eliminatedAt', "!=", null);
        return response()->json($user);
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

    public function login(Request $request)
    {
        $user = User::all();
        $validatedData = $request->validate([
           'emailInput'=>'email:rfc',
           'passwordInput'=>'required',

        ]);
        $llave = 0;
        foreach($user as $user){
            if($user->email == $request->emailInput and $user->password == $request->passwordInput){
                $llave = 1;
            }
        }
        if($llave == 1){
            return view('welcome');
        }
        else{
            return view('register');

        }
    }

}
