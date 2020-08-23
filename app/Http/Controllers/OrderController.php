<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all()->where('eliminatedAt',null);
        return response()->json($order);
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
        $newOrder = new Order();
        $newOrder->totalPrice = $request->totalPrice;
        $newOrder->quantity = $request->quantity;
        $newOrder->save();
        return response()->json([
            
            "message"=> "Nuevo pedido creado.",
            "idOrderCreated"=> $newOrder->id
            
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
        $order = Order::find($id);
        $order->where('eliminatedAt',null);
        return response()->json($order);
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
        $order = Order::findOrFail($id);
        $order->where('eliminatedAt',null);
        if($order != NULL){       
            if ($request->get('totalPrice') != NULL){
                $order->totalPrice = $request->get('totalPrice');
            }
            if ($request->get('quantity') != NULL){
                $order->quantity = $request->get('quantity');;
            }
            $order->save();
            return response()->json($order);
        }
        return "No se ha encontrado pedido con esa ID";
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
        $order = Order::find($id);
        if($order != NULL){
            $order->delete();
            return response()->json([
                "message"=> "Se elimina el pedido.",
                "idOrder" => $order->id
            ]);   
        }
        return "No existe pedido con esa ID";
    }
}
