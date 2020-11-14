<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function contactList()
    {
        $data = (new Claim)->find_all();
        return view('admin.claims.claims', compact('data'));
    }

    function studentsList()
    {
        $list = (new Student)->find_all();
        return view('admin.claims.students_list', compact('list'));
    }


}
