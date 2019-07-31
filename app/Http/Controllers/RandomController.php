<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Random;

class RandomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randoms = Random::all();
        return response()->json($randoms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $random = new Random();
        $random->description = $request->request->get('description');
        if($random->save()){
            return response()->json([
                'state' => $random->id
            ]);
        }else{
            return response()->json([
                'state' => false
            ]);
        }
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
        $random = Random::find($id);
        $random->description = $request->request->get('description');
        if($random->update()){
            return response()->json([
                'state' => true
            ]);
        }else{
            return response()->json([
                'state' => false
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Random::destroy($id)){
            return response()->json([
                'state' => true
            ]);
        }else{
            return response()->json([
                'state' => false
            ]);
        };
    }
}
