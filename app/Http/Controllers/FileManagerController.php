<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FileManagerController extends BaseController
{
    function all(){
    	return view('admin.file-manager.all');
    }

    function documents(){
    	return view('admin.file-manager.documents');
    }

    function media(){
        return view('admin.file-manager.media');
    }

    function image(){
    	return view('admin.file-manager.image');
    }
}
