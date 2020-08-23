<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $payment = Payment::all()->where('eliminatedAt',null);
        return response()->json($payment);
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
        $newPayment = new Payment();
        $newPayment->paymentType = $request->paymentType;
        $newPayment->save();
        return response()->json([
            
            "message"=> "Nuevo pago creado.",
            "idPaymentCreated"=> $newPayment->id
            
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
        $payment = Payment::find($id);
        $payment->where('eliminatedAt',null);
        return response()->json($payment);
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
        $payment = Payment::findOrFail($id);
        $payment->where('eliminatedAt',null);
        if($payment != NULL){
            if ($request->get('paymentType') != NULL){
                $payment->paymentType = $request->get('paymentType');
            }
            $payment->save();
            return response()->json($payment);
        }
        return "No se ha encontrado pago con esa ID";
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
        $payment = Payment::find($id);
        if($payment != NULL){
            $payment->delete();
            return response()->json([
                "message"=> "Se elimina el pago.",
                "idPayment" => $payment->id
            ]);   
        }
        return "No existe pago con esa ID";
    }
}
