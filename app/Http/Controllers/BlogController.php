<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function writeIndex(){
        return Inertia::render('Write');
    }

    public function submitBlog(Request $request){
        $title = $request->title;
        $post = $request->blogpost;

        $postTable = new Post();
        $postTable->user_id = '1';
        $postTable->post_title = $title;
        $postTable->post = $post;
        $postTable->save();

        return Inertia::location('/read');
    }

    public function readIndex(){
        return Inertia::render('Read');
    }

    public function showBlog(){
        // show selected blog
    }



}
