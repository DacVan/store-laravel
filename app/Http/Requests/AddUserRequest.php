<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5',
            'fullname'=>'required|min:4',
            'address'=>'required',
            'phone'=>'required|min:7|unique:users,phone',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>"Email không được để trống!",
            'email.email' =>"Email không đúng định dạng!",
            'email.unique'=>"Email đã tồn tại!",
            'password.required'=>"Mật khẩu không được để trống!",
            'password.min'=>"Mật khẩu không được nhỏ hơn 5 kí tự!",
            'fullname.required'=>"Họ và tên không được để trống!",
            'fullname.min'=>"Họ tên không được nhỏ hơn 4 kí tự!",
            'address.required'=>"Địa chỉ không không được để trống!",
            'phone.required' =>"Số điện thoại không được để trống!",
            'phone.min'=>"Số điện thoại không được nhỏ hơn 7 kí tự!",
            'phone.unique'=>"Số điện thoại đã tồn tại!",
        ];
    }
}
