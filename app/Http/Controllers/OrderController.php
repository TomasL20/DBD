<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{

    public function index()
    {
        $order = Order::all()->where('eliminatedAt',null);
        return response()->json($order);
    }

    public function create()
    {
        //
    }

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


    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    
    public function show($id)
    {
        $order = Order::find($id);
        if($order != NULL && $order->eliminatedAt == NULL){
            return response()->json($order);
        }
        return "No se ha encontrado pedido con esa ID.";
    }

    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $order = Order::all()->where('eliminatedAt', "!=", null);
        return response()->json($order);
    }

    public function edit($id)
    {
        //
    }

    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        if($order != NULL && $order->eliminatedAt == NULL){       
            if ($request->get('totalPrice') != NULL){
                $order->totalPrice = $request->get('totalPrice');
            }
            if ($request->get('quantity') != NULL){
                $order->quantity = $request->get('quantity');;
            }
            $order->save();
            return response()->json($order);
        }
        return "No se ha encontrado pedido con esa ID.";
    }

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
        return "No existe pedido con esa ID.";
    }
    //soft
    public function delete($id){
        $order = Order::find($id);
        if($order != NULL && $order->eliminatedAt == NULL){
            $order->eliminatedAt = now();
            $order->save();
            return response()->json([
                "message"=> "Se elimina el pedido. (soft)",
                "idOrder" => $order->id
            ]);   
        }
        return "No existe pedido con esa ID.";
    }
    //restore
    public function restore($id){
        $order = Order::find($id);
        if($order != NULL && $order->eliminatedAt != NULL){
            $order->eliminatedAt = NULL;
            $order->save();
            return response()->json([
                "message"=> "Se ha restaurado el pedido.",
                "idOrder" => $order->id
            ]);
        }
        return "El pedido no existe o no está eliminado.";
    }
}
