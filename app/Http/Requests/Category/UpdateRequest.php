<?php

namespace App\Http\Requests\Category;

use Anik\Form\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'name' => 'required|min:2',
            'cover' => 'url',
            'parent' => 'nullable|integer',
            'sequence' => 'numeric',
            'status' => 'in:0,1'
        ];
    }
}
