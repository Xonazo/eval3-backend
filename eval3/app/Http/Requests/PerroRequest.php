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
        return [
            'nombre' => 'required|string',
            'url_foto' => 'required|string',
            'descripcion' => 'required|string',
        ];
        
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
     ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->all(), Response::HTTP_BAD_REQUEST));
    }
}
