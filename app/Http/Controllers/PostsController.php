<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
    #Query builder
    #$post = DB::table('posts')->where('slug', $slug)->first();
    
    # Eloquent's query builder, it's cleaner
    $post = Post::where('slug', $slug)->firstOrFail();
    
    # First Or Fail reduces the need for !$post, abort(404)

    #dd($post); # Dump and die, gives you a way to inspect a variable and dump the execution
    # Useful for debugging

    /*
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];

        if(!array_key_exists($slug, $posts)){
            abort(404, 'Sorry, that post was not found.');
        }

    if(!$post){
        abort(404);
    }
    */
        
    return view('post', [
        'post' => $post
    ]);
    
    }
}
