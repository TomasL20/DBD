<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{

    public function index()
    {
        $payment = Payment::all()->where('eliminatedAt',null);
        return response()->json($payment);
    }

 
    public function create()
    {
        //
    }


    //Crea una nueva columna(tupla) con el id creado, especificando los campos debido al $request pasado como parametro
    public function store(Request $request)
    {
        $newPayment = new Payment();
        $newPayment->paymentType = $request->paymentType;
        $newPayment->save();
        return response()->json([
            
            "message"=> "Nuevo pago creado.",
            "idPaymentCreated"=> $newPayment->id
            
        ],201);
    }


    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    
    public function show($id)
    {
        $payment = Payment::find($id);
        if($payment != NULL && $payment->eliminatedAt == NULL){
            return response()->json($payment);
        }
        return "No se ha encontrado pago con esa ID."
    }

    public function edit($id)
    {
        //
    }


    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->where('eliminatedAt',null);
        if($payment != NULL){
            if ($request->get('paymentType') != NULL){
                $payment->paymentType = $request->get('paymentType');
            }
            $payment->save();
            return response()->json($payment);
        }
        return "No se ha encontrado pago con esa ID.";
    }

    //Elimina la tupla dependiendo del identificador entregado 
    public function destroy($id)
    {
        $payment = Payment::find($id);
        if($payment != NULL){
            $payment->delete();
            return response()->json([
                "message"=> "Se elimina el pago.",
                "idPayment" => $payment->id
            ]);   
        }
        return "No existe pago con esa ID.";
    }
    //soft
    public function delete($id){
        $payment = Payment::find($id);
        if($payment != NULL && $payment->eliminatedAt == NULL){
            $payment->eliminatedAt = now();
            $payment->save();
            return response()->json([
                "message"=> "Se elimina el pago. (soft)",
                "idPayment" => $payment->id
            ]);   
        }
        return "No existe pago con esa ID.";
    }
    //restore
    public function restore($id){
        $payment = Payment::find($id);
        if($payment != NULL && $payment->eliminatedAt != NULL){
            $payment->eliminatedAt = NULL;
            $payment->save();
            return response()->json([
                "message"=> "Se ha restaurado el pago.",
                "idPayment" => $payment->id
            ]);
        }
        return "El pago no existe o no está eliminado.";
    }
}
