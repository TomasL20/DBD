<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
//use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\Ad;
use App\Category;
use App\Order;
use App\Payment;
use App\Permission;
use App\Product;
use App\Rating;
use App\Record;
use App\Rol;
use App\RolPermission;
use App\User;
use App\UserRol;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    //Función que retorna un compact de toda la base de datos
    //Entradas: ninguna
    //Salida: compact con todas las tablas
    public function allIndex()
    {
        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $payment = Payment::all()->where('eliminatedAt',null);
        $permission = Permission::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        $record = Record::all()->where('eliminatedAt',null);
        $rol = Rol::all()->where('eliminatedAt',null);
        $rolpermission = RolPermission::all()->where('eliminatedAt',null);
        $user = User::all()->where('eliminatedAt',null);
        $userrol = UserRol::all()->where('eliminatedAt',null);
        return view('home',compact('ad','category','order','payment','permission','product','rating','record','rol','rolpermission','user','userrol'));
    }
    public function homeIndex()
    {   
        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        return view('home',compact('ad','category','order','product','rating'));
    }
    public function homeIndexId(int $id)
    {   $user = User::find($id);
        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        return view('home',compact('ad','category','order','product','rating','user'));
    }
    public function homeGet(Request $request){
        $user = User::find($request->userInput);
        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        return redirect('account/' . $user->id);
    }

    public function accountIndex()
    {
        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        return view('account',compact('ad','category','order','product','rating'));
    }

    
    public function accountIndexId(int $id)
    {   $user = User::find($id);
        $ad = Ad::all()->where('eliminatedAt',null);
        $category = Category::all()->where('eliminatedAt',null);
        $order = Order::all()->where('eliminatedAt',null);
        $product = Product::all()->where('eliminatedAt',null);
        $rating = Rating::all()->where('eliminatedAt',null);
        return view('account',compact('ad','category','order','product','rating','user'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
