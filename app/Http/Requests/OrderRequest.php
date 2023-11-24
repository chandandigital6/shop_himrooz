<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'house_number' => 'required',
            'landmark' => 'required',
            'email' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pin' => 'required',
            'amount' => 'required',
        ];
    }
}
