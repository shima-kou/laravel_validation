<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;


use App\Http\Requests\CreateUserRequest;

class RegisterController extends Controller
{
    public function index () {
        return view('register');
    }

    public function post (CreateUserRequest $request) {
        $id = $request->input('name');
        return redirect("/user/{$id}")->with('id', $id);
    }
}
