<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //connection with model User
        $employee = Employee::find(1);

        return view('welcome', compact('employee'));
    }
}
