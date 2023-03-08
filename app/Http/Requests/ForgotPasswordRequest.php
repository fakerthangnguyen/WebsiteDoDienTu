<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'                 => 'email|exists:khach_hangs,email',
            'g-recaptcha-response'  => 'required|captcha',
        ];
    }
}
