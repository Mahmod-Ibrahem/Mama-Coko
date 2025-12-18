<?php

namespace Modules\Blog\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Modules\Blog\Entities\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog::index', ['blogs' => $blogs]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blog::show', compact('blog'));
    }
}
