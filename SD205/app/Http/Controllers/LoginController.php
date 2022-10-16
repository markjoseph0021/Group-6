<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = Account::where('email', $request->email)->first();

        if ($user) {
            if ($user->password == $request->password) {
                return redirect()->route('home');
            }
            else {
                return "Incorrect email or password!";
            }
        } else {
            return "Incorrect email or password!";
        }
    }

    public function loginForm()
    {
        return view('login_form');
    }
}
