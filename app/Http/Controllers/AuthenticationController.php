<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
    	return view('admin.authentication.login');
    }

    function register(){
    	return view('admin.authentication.register');
    }

    function lockscreen(){
        return view('admin.authentication.lockscreen');
    }

    function forgot(){
    	return view('admin.authentication.forgot');
    }

    function page404(){
    	return view('admin.authentication.page404');
    }

    function page500(){
        return view('admin.authentication.page500');
    }

    function offline(){
    	return view('admin.authentication.offline');
    }
}
