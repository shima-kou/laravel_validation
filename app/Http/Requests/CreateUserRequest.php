<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:7'
        ];
    }

    public function messages() {
        return [
            'required' => '必須入力です。',
            'email.email' => 'メールアドレスの形式に誤りがあります。',
            'password.confirmed' => 'パスワードが確認用と一致していません。',
            'password.min' => 'パスワードは7文字以上で入力してください'
        ];
    }
}
