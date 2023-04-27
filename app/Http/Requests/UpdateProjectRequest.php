<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                'string',
                'max:150',
                'min:6',
                Rule::unique('projects', 'title')->ignore($this->project)
            ],
            'description' => 'required|min:10|string',
            'url' => 'nullable|url',
            'type_id' => 'nullable|exists:projects,type_id'
        ];
    }
}
