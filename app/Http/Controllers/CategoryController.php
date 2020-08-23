<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $category = Category::all()->where('eliminatedAt',null);
        return response()->json($category);
    }


    public function create()
    {
        //
    }

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

    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
   // $category != NULL && $category->eliminatedAt == NULL
   //return "No existe categoría con ese ID."
    public function show($id)
    {
        $category = Category::find($id);
        
        if($category != NULL && $category->eliminatedAt == NULL){
            return response()->json($category);
        }
        return "No existe categoría con ese ID.";

    }

    public function edit($id)
    {
        //
    }


     //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if($category != NULL && $category->eliminatedAt == NULL){
            if ($request->get('catName') != NULL){
                $category->catName = $request->get('catName');
            }
            $category->save();
        
            return response()->json($category);
        }
        return "No existe categoría con esa ID.";
    }
    //retorna la salida modificada en formato Json 


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
        return "No existe categoría con esa ID.";
    }
    //soft
    public function delete($id){
        $category = Category::find($id);
        if($category != NULL && $category->eliminatedAt == NULL){
            $category->eliminatedAt = now();
            $category->save();
            return response()->json([
                "message"=> "Se elimina la categoría. (soft)",
                "idCategory" => $category->id
            ]);   
        }
        return "No existe categoría con esa ID.";
    }
    //restore
    public function restore($id){
        $category = Category::find($id);
        if($category != NULL && $category->eliminatedAt != NULL){
            $category->eliminatedAt = NULL;
            $category->save();
            return response()->json([
                "message"=> "Se ha restaurado la categoría.",
                "idCategory" => $category->id
            ]);
        }
        return "La categoría no existe o no está eliminado.";
    }
}
