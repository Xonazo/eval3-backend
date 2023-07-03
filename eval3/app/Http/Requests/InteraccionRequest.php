<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class InteraccionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        $method = $this->method();

        switch ($method){
            case 'POST':
                return [
                    'Perro_interesado_id' => 'sometimes|required|integer',
                    'Perro_candidato_id' => 'sometimes|required|integer',
                    'preferencia' => ['sometimes','required', 'string', 'in:aceptado,rechazado'],
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
                    'Perro_interesado_id' => 'sometimes|required|integer',
                    'Perro_candidato_id' => 'sometimes|required|integer',
                    'preferencia' => ['sometimes','required', 'string', 'in:aceptado,rechazado'],
                    'id' => 'sometimes|required|integer',
                ];
            default:
                return [];
        }


    }


    public function messages()
    {
     return[
        'Perro_interesado_id.required' => 'El campo Perro_interesado_id es obligatorio',
        'Perro_interesado_id.integer' => 'El campo Perro_interesado_id debe ser un entero',
        'Perro_candidato_id.required' => 'El campo Perro_candidato_id es obligatorio',
        'Perro_candidato_id.integer' => 'El campo Perro_candidato_id debe ser un entero',
        'preferencia.required' => 'El campo preferencia es obligatorio',
        'preferencia.string' => 'El campo preferencia debe ser un string',
        'preferencia.in' => 'El campo preferencia debe ser aceptado o rechazado',
        'id.required' => 'El campo id es obligatorio',
        'id.integer' => 'El campo id debe ser un entero',
     ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->all(), Response::HTTP_BAD_REQUEST));
    }
}
