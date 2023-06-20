<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:32'],
            'description' => ['required', 'string', 'max:256'],
            'image' => ['image', 'max:1024'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->errorBag = 'edit_' . $this->route('project')->id;
    }
}
