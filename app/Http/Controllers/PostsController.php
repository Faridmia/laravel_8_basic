<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    //

    function createPost(){
        
        $post = new Post();
        $post->title = "Quick for Brown Fox";
        $post->content = "Jumps over the lazy dogs";
        $post->save();
        return $post;


    }


}
