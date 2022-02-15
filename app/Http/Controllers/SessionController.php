<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public static function check(): bool
    {

        if(auth()->check())
            return true;
        else
            return false;

    }

    public function  store()
    {
        $attributes =request()-> validate([
            'username' => 'required|max:44',
            'password' => 'required|max:44',
        ]);

        if(auth()->attempt($attributes)) {

            return redirect('/');
        }

        return back();
    }
}
