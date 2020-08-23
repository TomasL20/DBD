<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordController extends Controller
{


    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $record = Record::all()->where('eliminatedAt',null);
        return response()->json($record);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $newRecord = new Record();
        $newRecord->action = $request->action;
        $newRecord->createdAt = $request->createdAt;
        $newRecord->modifyIn = $request->modifyIn;
        $newRecord->save();
        return response()->json([
            "message"=> "Nuevo registro creado.",
            "idRecordCreated" => $newRecord->id
        ],201);
    }



    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $record = Record::find($id);
        if($record != NULL && $record->eliminatedAt == NULL){
            return response()->json($record);
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
        $record = Record::find($id);
        if($record != NULL){
            $record->delete();
            return response()->json([
                "message"=> "Se elimina el registro.",
                "idRecord" => $record->id
            ]);   
        }
        return "No existe registro con esa ID.";
    }
    //soft
    public function delete($id){
        $record = Record::find($id);
        if($record != NULL && $record->eliminatedAt == NULL){
            $record->eliminatedAt = now();
            $record->save();
            return response()->json([
                "message"=> "Se elimina el registro. (soft)",
                "idRecord" => $record->id
            ]);   
        }
        return "No existe registro con esa ID";
    }
    //restore
    public function restore($id){
        $record = Record::find($id);
        if($record != NULL && $record->eliminatedAt != NULL){
            $record->eliminatedAt = NULL;
            $record->save();
            return response()->json([
                "message"=> "Se ha restaurado el registro.",
                "idRecord" => $record->id
            ]);
        }
        return "El registro no existe o no está eliminado.";
    }
}
