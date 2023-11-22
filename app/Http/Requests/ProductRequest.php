<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title'=>'required',
            'slug'=>'required',
            'price'=>'',
           'categories_id'=>'required',
           'is_featured'=>'required|in:yes,no',
            'sku_no'=>'required',
            'qty'=>'required|integer',
//            'track_qty' => 'required|in:yes,no', // Validation rule for 'track_qty'

        ];
    }
}
