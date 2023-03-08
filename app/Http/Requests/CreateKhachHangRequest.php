<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKhachHangRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name'         =>  'required|min:5',
            'email'             =>  'required|email|unique:khach_hangs,email',
            'password'          =>  'required|string|min:8|max:30|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@!$%&*]/',
            're_password'       =>  'required|same:password',
            'phone_number'      =>  'required|digits_between:10,12',
        ];
    }
    public function messages()
    {
        return [
            'full_name.*'         =>  'Tên tài khoản phải nhiều hơn 5 kí tự',
            'email.required|email'             =>  'Lỗi email sai định dạng',
            'email.unique:khach_hangs,email'  =>  'Trùng email',
            'password.*'          =>  'Mật khẩu phải có ít nhất 1 chữ hoa,chữ thường,số từ 0 tới 9,1 kí tự đặc biệt và tối thiểu 8 ký tự',
            're_password.*'       =>  'Không khớp mật khẩu',
            'phone_number.*'      =>  'Lỗi định dạng số điện thoại',
        ];
    }

}
