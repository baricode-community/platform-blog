<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display all blog posts with pagination
     */
    public function index()
    {
        $blogs = Blog::latest('created_at')->paginate(10);
        
        return view('pages.blog.index', [
            'blogs' => $blogs,
            'title' => 'Blog - Baricode Community'
        ]);
    }

    /**
     * Display a specific blog post
     */
    public function show(Blog $blog)
    {
        // Increment view count if needed
        // $blog->increment('views');

        return view('pages.blog.show', [
            'blog' => $blog,
            'title' => $blog->title . ' - Baricode Community'
        ]);
    }

    /**
     * Display blog by slug
     */
    public function showBySlug($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        return view('pages.blog.show', [
            'blog' => $blog,
            'title' => $blog->title . ' - Baricode Community'
        ]);
    }
}
