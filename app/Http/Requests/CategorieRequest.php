<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class CategorieRequest extends FormRequest
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
        $rules =  [
            'name'=>'required|string',
            'slug'=>'required',
            'status'=>'required',
        ];
        if(Route::currentRouteName() === 'categorie.update'){
            $rules['image'] = 'nullable';
        } else {
            $rules['image'] = 'required';
        }
        return $rules;
    }
}
