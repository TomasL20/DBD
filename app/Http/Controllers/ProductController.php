<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all()->where('eliminatedAt',null);
        return response()->json($product);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $product = Product::find($id);
        $product->where('eliminatedAt',null);
        return response()->json($product);
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
        $product = Product::findOrFail($id);
        $product->where('eliminatedAt',null);
        if($product != NULL){
            if ($request->get('prodName') != NULL){
                $product->prodName = $request->get('prodName');
            }
            $product->save();
            return response()->json($product);
        }
        return "El producto con esa ID no existe";
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
}
