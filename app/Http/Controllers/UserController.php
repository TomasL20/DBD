<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
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
        $newUser= new User();
        $newUser->userName = $request->userName;
        $newUser->realName = $request->realName;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        return response()->json([
            
            "message"=> "Nuevo usuario creado.",
            "idUserCreated"=> $newUser->id
            
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
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
        $user = user::findOrFail($id);
        if ($request->get('userName') != NULL){
            $user->userName = $request->get('userName');
        }
        if ($request->get('realName') != NULL){
            $user->realName = $request->get('realName');
        }
        if ($request->get('email') != NULL){
            $user->email = $request->get('email');
        }
        if ($request->get('password') != NULL){
            $user->password = $request->get('password');
        }
        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user != NULL){
            $user->delete();
            return response()->json([
                "message"=> "Se elimina el usuario.",
                "idUser" => $user->id
            ]);   
        }
        return "No existe usuario con esa ID";
    }
}
