<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('user.blog.blogs', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $blogs = Blog::orderByDesc('id')->limit(5)->get();
        return view('user.blog.blog-details', compact('blog', 'blogs'));
    }
}
