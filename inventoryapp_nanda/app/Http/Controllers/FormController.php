<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }
    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        return view('pages.welcome', compact('firstname', 'lastname'));
    }
}
