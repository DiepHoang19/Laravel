<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'customer' => 'required|string',
            'email' => 'required|string|email',
            'phone_number' => 'required|string|digits:10',
            'address' => 'required|string',
            'payment_method' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'customer.required' => 'Bắt buộc nhập Tên',
            'phone_number.required' => 'Bắt buộc nhập Số điện thoại',
            'phone_number.digits' => 'Số điện thoại phải có 10 chữ số',
            'email.required' => 'Bắt buộc nhập Email',
            'address.required' => 'Bắt buộc nhập Địa chỉ',
            'payment_method.required' => 'Bắt buộc chọn phương thức thanh toán',
        ];
    }
}
