<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Product;
use App\Ad;
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
    //Override de la función para personalizar los mensajes de error.


    //Crea una nueva columna(tupla) con el id creado, especificando los campos debido al $request pasado como parametro
    public function store(Request $request)
    {

        $user= new User();
        $validatedData =  $request->validate([
            'usernameInput' => 'required|min:4|max:26|unique:users,userName',
            'nameInput' => 'required|min:6|max:100',
            'emailInput' => 'email:rfc|unique:users,email',
            'passwordInput' => 'required|min:4|max:26',
        ],
        [
            'usernameInput.required' => 'No se ha puesto nombre de usuario.',
            'usernameInput.min' => 'El nombre de usuario debe ser de mínimo 4 carácteres y máximo 26.',
            'usernameInput.max' => 'El nombre de usuario debe ser de mínimo 4 carácteres y máximo 26.',
            'nameInput.required' => 'No se ha puesto nombre.',
            'nameInput.min' => 'El nombre debe ser de mínimo 6 carácteres y máximo 100.',
            'nameInput.max' => 'El nombre debe ser de mínimo 6 carácteres y máximo 100.',
            'emailInput.email' => 'El email no es válido.',
            'emailInput.unique' => 'El email ya existe.',
        ]);
        $user->userName = $request->usernameInput;
        $user->realName = $request->nameInput;
        $user->email = $request->emailInput;
        $user->password = $request->passwordInput;
        $user->save();
        return view('home',compact('$user',));
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
        $users = User::all();
        $category = Category::all();
        $validatedData = $request->validate([
           'emailInput'=>'email:rfc',
           'passwordInput'=>'required',

        ]);
        
        $llave = 3;
        foreach($users as $user){
            if($user->email == $request->emailInput){
                $llave = 1; //si  el email se verifica quiere decir que pasa y esta en lo correcto.
                
                if($user->password == $request->passwordInput){
                    $llave = 2; //quiere decir que la password es correcta
                }
            }  
        }
        if($llave == 2){
            //return redirect('home')->with(compact('user','category','llave'));
            return redirect('home/' . $user->id);
        }
        else if($llave==1){
            
            return view('login',compact('user','llave'));
        }
        else{
            
            return view('login',compact('user','llave'));
        }
    }

}
