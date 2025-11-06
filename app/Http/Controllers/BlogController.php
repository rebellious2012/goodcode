<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
use App\Models\BlogPost;

    public function __invoke(Request $request): View
    {
        $blogPosts = BlogPost::latest()->get();
        return view('pages.blog', compact('blogPosts'));
    }
}
