<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppealRequest extends FormRequest
{

    protected $redirect = '/#contacts';
    protected $errorBag = 'appeal';

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
            'name' => ['required', 'max:32'],
            'email' => ['required', 'email', 'max:32'],
            'subject' => ['required', 'max:32'],
            'message' => ['required'],
        ];
    }
}
