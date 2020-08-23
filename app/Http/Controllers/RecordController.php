<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $record = Record::all();
        return response()->json($record);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $record = Record::find($id);
        return response()->json($record);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return "No existe registro con esa ID";
    }
}
