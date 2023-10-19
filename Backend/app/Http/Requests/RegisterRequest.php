<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class RegisterRequest extends FormRequest
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
            'name' => ['required' , 'string' , 'max:150'] ,
            'family' => ['required' , 'string' , 'max:150'] ,
            'age' => ['required' , 'string' , 'max:100'] ,
            'father_name' => ['required' , 'string' , 'max:150'] ,
            'national_code' => ['required' , 'integer' , 'unique:users'] ,
            'province' => ['required' , 'string' , 'exists:App\Models\Province,name'] ,
            'city' => ['required' , 'string' , 'exists:App\Models\City,name'] ,
            'password' => ['required' , 'string'] ,
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

}
