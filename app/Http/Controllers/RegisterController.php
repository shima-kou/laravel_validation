<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public function post (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:7'
        ],
        $message = [
            'required' => '必須入力です。',
            'email.email' => 'メールアドレスの形式に誤りがあります。',
            'password.confirmed' => 'パスワードが確認用と一致していません。',
            'password.min' => 'パスワードは7文字以上で入力してください'
        ]);
        if($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }
        $id = $request->input('name');
        return redirect("/user/{$id}")->with('id', $id);
    }
}
