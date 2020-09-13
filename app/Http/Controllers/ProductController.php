<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all()->where('eliminatedAt',null);
        return view('home', compact('product'));
    }

    public function create()
    {
        //
    }

    //Elimina la tupla dependiendo del identificador entregado 
    public function store(Request $request)
    {
        $newProduct = new Product();
        $newProduct->prodName = $request->prodName;
        $newProduct->save();
        return response()->json([
            
            "message"=> "Nuevo producto creado.",
            "idProductCreated" => $newProduct->id
            
        ],201);
    }



     //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $product = Product::find($id);
        if($product != NULL && $product->eliminatedAt == NULL){
            return response()->json($product);
        }
        return "El producto con esa ID no existe.";
    }
    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $product = Product::all()->where('eliminatedAt', "!=", null);
        return response()->json($product);
    }

    public function edit($id)
    {
        //
    }

    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if($product != NULL && $product->eliminatedAt == NULL){
            if ($request->get('prodName') != NULL){
                $product->prodName = $request->get('prodName');
            }
            $product->save();
            return response()->json($product);
        }
        return "El producto con esa ID no existe.";
    }

    //Elimina la tupla dependiendo del identificador entregado 
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product != NULL){
            $product->delete();
            return response()->json([
                "message"=> "Se elimina el producto.",
                "idProduct" => $product->id
            ]);   
        }
        return "No existe producto con esa ID";
    }
    //soft
    public function delete($id){
        $product = Product::find($id);
        if($product != NULL && $product->eliminatedAt == NULL){
            $product->eliminatedAt = now();
            $product->save();
            return response()->json([
                "message"=> "Se elimina el producto. (soft)",
                "idProduct" => $product->id
            ]);   
        }
        return "No existe producto con esa ID.";
    }
    //restore
    public function restore($id){
        $product = Product::find($id);
        if($product != NULL && $product->eliminatedAt != NULL){
            $product->eliminatedAt = NULL;
            $product->save();
            return response()->json([
                "message"=> "Se ha restaurado el producto.",
                "idProduct" => $product->id
            ]);
        }
        return "El producto no existe o no está eliminado.";
    }
}
