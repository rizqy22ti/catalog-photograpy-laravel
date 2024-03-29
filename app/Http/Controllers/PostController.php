<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $category = null;
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
        }
    
        // Debugging line to check the value of $category
        
    
        $posts = Post::with(["author", "category"])
            ->latest()
            ->filter(request(["search", 'category', 'author']))
            ->paginate(9)->withQueryString();
    
        return view('posts.posts', [
            "category"  => $category,
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.post', [
            "post"  => $post
        ]);
    }
}
