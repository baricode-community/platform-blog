<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with blog overview
     */
    public function index()
    {
        $latestBlogs = Blog::latest('created_at')->limit(3)->get();
        
        return view('pages.home.index', [
            'latestBlogs' => $latestBlogs,
            'title' => 'Baricode Community - Belajar Bareng, Berkembang Bersama'
        ]);
    }
}
