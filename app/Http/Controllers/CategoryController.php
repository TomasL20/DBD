<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $category = Category::all();
        return response()->json($category);
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
    //Crea una nueva columna(tupla) con el id creado, especificando los campos debido al $request pasado como parametro
    public function store(Request $request)
    {
        $newCategory = new Category();
        $newCategory->catName = $request->catName;
        $newCategory->save();
        return response()->json([
            
            "message"=> "Nueva categoría creada",
            "idCategoryCreated"=>$newCategory->id
            
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
        $category = Category::find($id);
        return response()->json($category);
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

     //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if ($request->get('catName') != NULL){
            $category->catName = $request->get('catName');
        }
        $category->save();
    
        return response()->json($category);
    }
    //retorna la salida modificada en formato Json 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Elimina la tupla dependiendo del identificador entregado
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category != NULL){
            $category->delete();
            return response()->json([
                "message"=> "Se elimina la categoría.",
                "idCategory" => $category->id
            ]);   
        }
        return "No existe categoría con esa ID";
    }
}
