<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return Pais::all();
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
        $pais = Pais::create($request->all());
        return response($pais, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $pais = Pais::find($id);
        if (is_null($pais)) {
            return response()->json(['msg' => 'Pais no Encontrado'], 404);
        }
        return response()->json(Pais::find($id), 200);
      
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
        $pais = Pais::find($id);
        if (is_null($pais)) {
            return response()->json(['Mensaje' => 'Pais no Encontrada'], 404);
        }
        $pais->update($request->all());
        return response($pais, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $pais = pais::find($id);
        if (is_null($pais)) {
            return response()->json(['msg' => 'Pais no Encontrada'], 404);
        }
        $pais->delete();
        return response()->json(['msg' => 'Pais Eliminado'], 200);

    }
}
