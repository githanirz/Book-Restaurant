<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('makan.blog', ['blogs' => $blogs]);
    }

    public function show(Blog $blog, $id)
    {
        return view('makan.show', [
            'blog' => Blog::find($id)
        ]);
    }
}
