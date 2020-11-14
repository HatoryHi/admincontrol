<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TablesController extends BaseController
{
    function normal(){
    	return view('admin.tables.normal');
    }

    function datatable(){
    	return view('admin.tables.datatable');
    }

    function editable(){
    	return view('admin.tables.editable');
    }

    function footable(){
    	return view('admin.tables.footable');
    }

    function color(){
    	return view('admin.tables.color');
    }
}
