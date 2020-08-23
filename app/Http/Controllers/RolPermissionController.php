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
        //
    }

    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $rolpermission = RolPermission::find($id);
        if($rolpermission != NULL && $rolpermission->eliminatedAt == NULL){
            return response()->json($rolpermission);
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
