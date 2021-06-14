<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        $posts = Post::query()->orderBy('created_at', 'desc')->get();
        $rows = [];
        foreach ($posts as $post){
            $author = User::where('id', $post->user_id)->first();
            $t = strtotime($post->created_at);
            $rows[] = [
                'title'=>$post->post_title,
                'post' => $post->post,
                'author' => $author->name,
                'date' => date('m-d-y', $t)
            ];

        }

        return Inertia::render('Read', [
            'rows' => $rows
        ]);
    }

    public function showBlog(){
        // show selected blog
    }



}
