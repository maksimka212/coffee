<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class LoginController extends Controller
{
    public static function show() {
        return view('login');
    }
}
