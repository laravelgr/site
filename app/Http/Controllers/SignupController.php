<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{

    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'bail|required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        // todo Add to db

        // todo Slack invitation

        // todo Mailchimp add user

        // todo alert slack for new user Signup

        return response()->json(['result' => 'done'], 200);

    }
}
