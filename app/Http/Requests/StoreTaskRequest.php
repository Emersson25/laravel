<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'project_id' => 'required|exists:projects,id',
            'title' => 'required|min:3|max:100',
            'description' => 'nullable',
            'status' => 'required|in:pending,in_progress,done',
            'priority' => 'required|in:low,medium,high',
            'due_date' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'project_id.required' => 'El proyecto es obligatorio',
            'project_id.exists' => 'El proyecto seleccionado no existe',
            'title.required' => 'El título es obligatorio',
            'title.min' => 'El título debe tener al menos 3 caracteres',
            'title.max' => 'El título no puede exceder los 100 caracteres',
            'status.required' => 'El estado es obligatorio',
            'status.in' => 'El estado debe ser pendiente, en progreso o terminado',
            'priority.required' => 'La prioridad es obligatoria',
            'priority.in' => 'La prioridad debe ser baja, media o alta',
            'due_date.required' => 'La fecha de vencimiento es obligatoria',
            'due_date.date' => 'La fecha de vencimiento debe ser una fecha válida',
        ];
    }
}