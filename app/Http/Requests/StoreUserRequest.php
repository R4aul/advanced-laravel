<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'=>['required', 'string'],
            'email'=>['required', 'email'],
            'password'=>['required', 'min:8', 'max:16'],
            'specialty'=>['required'],
            'hire_date'=>['required', 'date']
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'El :attribute es obligatorio',
            'name.string'=>'El :attribute solo deve tener letras',
            'email.required'=>'El :attribute es obligatorio',
            'email.email'=>'Debes ingresar un :attribute',
            'password.required' => 'La :attribute es obligatoria',
            'password.min' => 'La :attribute debe tener almenos 8 caracteres',
            'password.max' => 'La :attribute debe tener un maximo de 16 caracteres',
            'scpefialty.required'=>'El :attribute es obligatorio',
            'hire_date.required'=>'La :attribute debe ser obligatorio',
            'hire_date.date'=>'La :attribute debe ser una fecha valida',
            'hire_date.before'=>'La :attribute debe ser anterior a hoy',
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'nombre',
            'email'=>'correo',
            'password'=>'conraseña',
            'specialty'=>'especialdad',
            'hire_date'=>'fecha de contratacion'
        ];
    }
}
