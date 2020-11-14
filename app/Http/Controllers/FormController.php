<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    function basic(){
    	return view('admin.form.basic');
    }

    function advanced(){
    	return view('admin.form.advanced');
    }

    function examples(){
    	return view('admin.form.examples');
    }

    function validation(){
    	return view('admin.form.validation');
    }

    function wizard(){
    	return view('admin.form.wizard');
    }

    function editors(){
    	return view('admin.form.editors');
    }

    function upload(){
    	return view('admin.form.upload');
    }

    function summernote(){
    	return view('admin.form.summernote');
    }

}
