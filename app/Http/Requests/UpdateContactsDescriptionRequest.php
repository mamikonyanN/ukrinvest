<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactsDescriptionRequest extends FormRequest
{
    protected $redirect = '/#contacts';
    protected $errorBag = 'contacts';

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
            'phone_number' =>    ['required', 'string', 'max:32'],
            'email' =>           ['required', 'email', 'max:32'],
            'building_number' => ['required', 'string', 'max:32'],
            'street_name' =>     ['required', 'string', 'max:32'],
            'postcode' =>        ['required', 'string', 'max:32'],
            'city' =>            ['required', 'string', 'max:32'],
            'country' =>         ['required', 'string', 'max:32'],
        ];
    }
}
