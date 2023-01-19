<?php

namespace App\Http\Requests\Block;

use Anik\Form\FormRequest;

class Update extends FormRequest
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
            'name' => ['required', 'string', 'min:2'],
            'image' => ['url'],
            'sequence' => ['nullable', 'numeric', 'min:0'],
            'status' => ['in:0,1'],
            'meta' => 'array',
            'visible_begin' => 'date_format:Y-m-d H:i:s',
            'visible_ending' => 'date_format:Y-m-d H:i:s',
        ];
    }
}
