<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(Request $request) {
        return view('index');
    }

    public function employee(Request $request) {
        return view('employees');
    }

    public function payroll(Request $request) {
        return view('payroll');
    }
}

