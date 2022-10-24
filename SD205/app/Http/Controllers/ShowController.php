<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account;

class ShowContoller extends Controller
{
    public function show(Request $request)
    {
        $show = Account::where('email', $request->email)->first();

        if ($show) {
            if ($show->password == $request->password) {
                return redirect('final_board');
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
