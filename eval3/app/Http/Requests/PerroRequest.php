<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PerroRequest extends FormRequest
{
  
    public function rules(): array
    {
        
        $method = $this->method();

        switch ($method){
            case 'POST':
                return [
                    'nombre' => 'sometimes|required|string',
                    'url_foto' => 'sometimes|required|string',
                    'descripcion' => 'sometimes|required|string',
                    'sexo' => 'sometimes|required|string|in:macho,hembra',
                ];
            case 'GET':
                return [
                    'id' => 'sometimes|required|integer',
                ];
            case 'DELETE':
                return [
                    'id' => 'sometimes|required|integer',
                ];
            case 'PUT':
                return [
                    'nombre' => 'sometimes|required|string',
                    'url_foto' => 'sometimes|required|string',
                    'descripcion' => 'sometimes|required|string',
                    'sexo' => 'sometimes|required|string|in:macho,hembra',
                    'id' => 'sometimes|required|integer',
                ];
            default:
                return [];
        }
        
    }

    public function messages()
    {
     return[
        'nombre.required' => 'El campo nombre es obligatorio',
        'nombre.string' => 'El campo nombre debe ser un string',
        'url_foto.required' => 'El campo url_foto es obligatorio',
        'url_foto.string' => 'El campo url_foto debe ser un string',
        'descripcion.required' => 'El campo descripcion es obligatorio',
        'descripcion.string' => 'El campo descripcion debe ser un string',
        'id.required' => 'El campo id es obligatorio',
        'id.integer' => 'El campo id debe ser un entero',
        'sexo.required' => 'El campo sexo es obligatorio',
        'sexo.string' => 'El campo sexo debe ser un string',
        'sexo.in' => 'El campo sexo debe ser macho o hembra',
        
     ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->all(), Response::HTTP_BAD_REQUEST));
    }
}
