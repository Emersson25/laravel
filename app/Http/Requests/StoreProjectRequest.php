<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:projects|min:3|max:100',
            'description' => 'nullable',
            'status' => 'required|in:active,inactive',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del proyecto es obligatorio',
            'name.unique' => 'Ya existe un proyecto con este nombre',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre no puede exceder los 100 caracteres',
            'status.required' => 'El estado es obligatorio',
            'status.in' => 'El estado debe ser activo o inactivo',
        ];
    }
}