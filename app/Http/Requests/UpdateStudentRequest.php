<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'matricula' => ['required'],
            'email' => ['string', 'email'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio',
            'name.string' => 'El :attribute solo deve tener letras',
            'matricula.required' => 'La :attribute es requerida',
            'matricula.size' => 'La :attribute deve de tener un tamaño de 7 caracteres',
            'email.required' => 'El :attribute es obligatorio',
            'email.email' => 'Debes ingresar un :attribute',
            'phone.required'=>'El :attribute es obligatorio',
            'address.required'=>'La :attribute es obligatoria',
            'address.string'=>'La :attribute debe ser un texto',
            'address.min'=>'La :attribute debe tener almenos :min',
            'address.max'=>'La :attribute debe tener como maximo :max',
            'birth_date.required'=>'La :attribute debe ser obligatorio',
            'birth_date.date'=>'La :attribute debe ser una fecha valida',
            'birth_date.before'=>'La :attribute debe ser anterior a hoy',
            'birth_date.after'=>'La :attribute debe posterior al primero de enero de 1950',
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'nombre',
            'matricula' => 'metricula',
            'email' => 'correo electronico',
            'phone'=>'telefono',
            'address'=>'direccion',
            'birth_date'=>'fecha de nacimiento'
        ];
    }
}
