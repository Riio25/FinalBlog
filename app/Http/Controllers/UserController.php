<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function registerIndex(){
        return Intertia::render('Register');
    }

    public function registerUser(){
        // insert registration info into user table
    }

    public function loginIndex(){
        // show login page
    }
}
