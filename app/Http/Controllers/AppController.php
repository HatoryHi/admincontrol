<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    function inbox(){
    	return view('admin.app.inbox');
    }

    function compose(){
    	return view('admin.app.compose');
    }

    function single(){
    	return view('admin.app.single');
    }

    function chat(){
    	return view('admin.app.chat');
    }

    function calendar(){
        return view('admin.app.calendar');
    }

    function contactList(){
        $data = (new Student)->find_all();
    	return view('admin.app.contact-list',compact('data'));
    }
}
