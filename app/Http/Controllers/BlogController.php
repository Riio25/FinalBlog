<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function writeIndex(){
        return Inertia::render('Write');
    }

    public function submitBlog(){
        // save blog to data base
    }

    public function readIndex(){
        return Inertia::render('Read');
    }

    public function showBlog(){
        // show selected blog
    }



}
