<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perro;
use Illuminate\Http\Response;
use Exception;
use App\Http\Requests\PerroRequest;


class PerroController extends Controller
{


public function createPerro(PerroRequest $request)
{
    try {
        $perro = new Perro();
        $perro->nombre = $request->nombre;
        $perro->url_foto = $request->url_foto;
        $perro->descripcion = $request->descripcion;
        $perro->save();
        return response()->json(["perro"=>$perro], Response::HTTP_OK);
    } catch (Exception $e) {
        return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
}


public function getAllPerros(Request $request)
{
    $perros = Perro::all();
    return response()->json(["perros"=>$perros], Response::HTTP_OK);
}



public function deletePerro(Request $request)
{
    try {
        $perro = Perro::find($request->id);
        $perro->delete();
        return response()->json(["perro"=>$perro], Response::HTTP_OK);
    } catch (Exception $e) {
        return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
}


public function editPerro(Request $request)
{
    try{
        $perro = Perro::find($request->id);
        $perro->nombre = $request->nombre;
        $perro->url_foto = $request->url_foto;
        $perro->descripcion = $request->descripcion;
        $perro->save();
        return response()->json(["perro"=>$perro], Response::HTTP_OK);
    } catch (Exception $e) {
        return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
}

public function getPerroid(Request $request)
{
    try{
        $perro = Perro::find($request->id);
        return response()->json(["perro"=>$perro], Response::HTTP_OK);
    } catch (Exception $e) {
        return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
}


}
