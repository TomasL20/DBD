<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use App\User;
use App\Category;
use App\Order;
use App\Product;
use App\Rating;


class AdController extends Controller
{

    //Muestra todo el contenido de la tabla en formato json
    public function index()
    {
        $ad = Ad::all()->where('eliminatedAt',null);
        return response()->json($ad);
    }

    public function create()
    {
        //
    }

    //Crea una nueva columna(tupla) con el id creado, especificando los campos debido al $request pasado como parametro
    public function store(Request $request,int $id)
    {
        $user = User::find($id);

        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        $newAd = new Ad();

        $validatedData = $request->validate([
            'nameInput' => 'required|min:5|max:100',
            'descriptionInput' => 'required|min:10|max:300',
            'priceInput' => 'required|numeric',
            'stockInput' => 'required|integer|gte:1',
            'productId' => 'required',
            'aboutInput' => 'required|min:5|max:100',
            'ubicationInput' => 'required|min:5|max:100',
            'checkboxInput' => 'accepted',
        ],
        [
            'nameInput.required' => 'Debes poner un nombre a tu anuncio.',
            'nameInput.min' => 'El nombre debe tener de 5 a 100 carácteres.',
            'nameInput.max' => 'El nombre debe tener de 5 a 100 carácteres.',

            'descriptionInput.required' => 'Debes poner descripción a tu anuncio.',
            'descriptionInput.min' => 'La descripción del anuncio debe tener de 10 a 300 carácteres.',
            'descriptionInput.max' => 'La descripción del anuncio debe tener de 10 a 300 carácteres.',

            'priceInput.required' => 'Debes ponerle un precio a tu producto.',
            'priceInput.numeric' => 'El precio debe ser un número.',

            'stockInput.required' => 'Debes poner stock a tu producto.',
            'stockInput.integer' => 'El stock debe ser un número.',
            'stockInput.gte' => 'El stock debe ser 1 o mayor.',

            'productId.required' => 'Ponle categoría a tu producto.',

            'aboutInput.required' => 'Debes rellenar la información sobre ti.',
            'aboutInput.min' => 'Tu información debe tener de 5 a 100 carácteres.',
            'aboutInput.max' => 'Tu información debe tener de 5 a 100 carácteres.',

            'ubicationInput.required' => 'Debes poner una ubicación.',
            'ubicationInput.min' => 'La ubicación debe tener de 5 a 100 carácteres.',
            'ubicationInput.max' => 'La ubicación debe tener de 5 a 100 carácteres.',

            'checkboxInput.accepted' => 'Debes aceptar los términos y condiciones.',

        ]);
        $tempPrice = $request->priceInput;
        $tempPrice = (float) $tempPrice;
        $tempStock = $request->stockInput;
        $tempStock = (int) $tempStock;

        $newAd->description = $request->descriptionInput;
        $newAd->descName = $request->nameInput;
        $newAd->arrInfo = $request->aboutInput;
        $newAd->price = $tempPrice;
        $newAd->stock = $tempStock;
        $newAd->status = $request->checkboxInput;
        $newAd->location = $request->ubicationInput;
        $newAd->idUser = $id;
        $newAd->idProd = $request->productId;
        $newAd->save();
        return redirect('home/' . $id);
    }

    //Pregunta un parametro en especifuco, muestra  dependiendo del parametro indexeado
    public function show($id)
    {
        $ad = Ad::find($id);
        if($ad != NULL && $ad->eliminatedAt == NULL){
            return response()->json($ad);
        }
        return "No existe anuncio con esa ID.";
        
    }
    //Función que muestra todos los datos que han sido eliminados
    //Entrada: ninguna
    //Salida: una respuesta en formato json de todas las tuplas que han sido eliminadas
    public function showAllEliminated()
    {
        $ad = Ad::all()->where('eliminatedAt', "!=", null);
        return response()->json($ad);
    }

    public function edit($id)
    {
        //
    }

    //Funcion que cambia una tupla, la modifica con respecto al id y request entregado
    public function update(Request $request, $id)
    {
        $ad = Ad::find($id);
        if($ad != NULL && $ad->eliminatedAt == NULL){
            if ($request->get('description') != NULL){
                $ad->description = $request->get('description');
            }
            if ($request->get('descName') != NULL){
                $ad->descName = $request->get('descName');
            }
            if ($request->get('arrInfo') != NULL){
                $ad->arrInfo = $request->get('arrInfo');
            }
            if ($request->get('stock') != NULL){
                $ad->stock = $request->get('stock');
            }
            if ($request->get('status') != NULL){
                $ad->status = $request->get('status');
            }
            if ($request->get('location') != NULL){
                $ad->location = $request->get('location');
            }
            if($request->get('price') != NULL){
                $ad->price = $request->get('price');
            }
            $ad->save();
            return response()->json($ad);
        }
        return "No existe anuncio con esa ID.";
    }
    //retorna la salida modificada en formato Json


    //Elimina la tupla dependiendo del identificador entregado
    public function destroy($id)
    {
        $ad = Ad::find($id);
        if($ad != NULL ){
            $ad->delete();
            return response()->json([
                "message"=> "Se elimina el anuncio.",
                "idAd" => $ad->id
            ]);   
        }
        return "No existe anuncio con esa ID";
    }
    //soft
    public function delete($id){
        $ad = Ad::find($id);
        if($ad != NULL && $ad->eliminatedAt == NULL){
            
            $ad->eliminatedAt = now();
            $ad->save();
            return response()->json([
                "message"=> "Se elimina el anuncio. (soft)",
                "idAd" => $ad->id
            ]);   
        }
        return "No existe anuncio con esa ID";
    }
    //restore
    public function restore($id){
        $ad = Ad::find($id);
        if($ad != NULL && $ad->eliminatedAt != NULL){
            $ad->eliminatedAt = NULL;
            $ad->save();
            return response()->json([
                "message"=> "Se ha restaurado el anuncio.",
                "idAd" => $ad->id
            ]);
        }
        return "El anuncio no existe o no está eliminado.";
    }
}
