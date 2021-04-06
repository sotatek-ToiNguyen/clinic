<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function login(Request $request) {
        if($request->isMethod('get')){
            return view('auth.login');
        }else{
            return 111;
        }

    }
}
