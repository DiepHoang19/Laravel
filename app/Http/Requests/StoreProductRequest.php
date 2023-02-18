<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric|gt:0'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bắt buộc nhập tên',
            'price.required' => 'Bắt buộc nhập giá',
            'price.numeric' => 'Price phải là số',
            'price.gt' => 'Price phải là số dương',
        ];
    }
}