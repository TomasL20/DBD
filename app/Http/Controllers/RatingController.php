<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rating = Rating::all();
        return response()->json($rating);
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
        $newRating = new Rating();
        $newRating->rate = $request->rate;
        $newRating->comment = $request->comment;
        $newRating->commentDate = $request->commentDate;
        $newRating->save();
        return response()->json([
            
            "message"=> "Nueva valoración creada.",
            "idRatingCreated"=> $newRating->id
            
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
        $rating = Rating::find($id);
        return response()->json($rating);
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
        $rating = rating::findOrFail($id);
        if ($request->get('rating') != NULL){
            $rating->rating = $request->get('rating');
        }
        if ($request->get('comment') != NULL){
            $rating->comment = $request->get('comment');
        }
        if ($request->get('commentDate') != NULL){
            $rating->commentDate = $request->get('commentDate');
        }
        $rating->save();
        return response()->json($rating);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rating = Rating::find($id);
        if($rating != NULL){
            $rating->delete();
            return response()->json([
                "message"=> "Se elimina la valoración.",
                "idRating" => $rating->id
            ]);   
        }
        return "No existe valoración con esa ID";
    }
}
