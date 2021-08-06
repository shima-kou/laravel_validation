<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ($id) {
        return view('login', ['id' => $id]);
    }

    public function post (Request $request, $id) {
        $submit = $request->input('submit');
        if($submit) {
            return redirect('/register');
        } else {
            return redirect('/user/{id}')->with('id', $id);
        }
    }
}
