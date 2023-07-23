<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaccion;
use Illuminate\Http\Response;
use Exception;
use App\Http\Requests\InteraccionRequest;
use Illuminate\Support\Facades\Log;
use Spatie\FlareCliente\Http\Response as HttpResponse;

class InteraccionController extends Controller
{
    
    public function createInteraccion(InteraccionRequest $request)
    {
        try {
            $interaccion = new Interaccion();
            $interaccion->Perro_interesado_id = $request->Perro_interesado_id;
            $interaccion->Perro_candidato_id = $request->Perro_candidato_id;
            $interaccion->preferencia = $request->preferencia;
            $interaccion->save();
            return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function getAllInteracciones(Request $request)
    {
        $interacciones = Interaccion::all();
        return response()->json(["interacciones"=>$interacciones], Response::HTTP_OK);
    }

    public function deleteInteraccion(InteraccionRequest $request)
    {
        try {
            $interaccion = Interaccion::find($request->id);
            $interaccion->delete();
            return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function editInteraccion(InteraccionRequest $request)
    {
        try {
            $interaccion = Interaccion::find($request->id);
            $interaccion->Perro_interesado_id = $request->Perro_interesado_id;
            $interaccion->Perro_candidato_id = $request->Perro_candidato_id;
            $interaccion->preferencia = $request->preferencia;
            $interaccion->save();
            return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }


    public function getInterracionPerro(InteraccionRequest $request)
    {
        try {
            $interacciones = Interaccion::where('Perro_interesado_id', $request->Perro_interesado_id)->get();
            return response()->json(["interacciones"=>$interacciones], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error"=>$e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
    
}
