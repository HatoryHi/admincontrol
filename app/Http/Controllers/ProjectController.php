<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function projectList(){
    	return view('admin.project.project-list');
    }

    function taskboard(){
    	return view('admin.project.taskboard');
    }

    function ticketList(){
    	return view('admin.project.ticket-list');
    }

    function ticketDetail(){
    	return view('admin.project.ticket-detail');
    }
}
