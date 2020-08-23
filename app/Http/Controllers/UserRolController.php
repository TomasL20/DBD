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
        //
    }
    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $userrol = UserRol::find($id);
        if($userrol != NULL && $userrol->eliminatedAt == NULL){
            return response()->json($userrol);
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
