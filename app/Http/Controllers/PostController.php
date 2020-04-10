<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function index()
    {
        return view('backend.layouts.index');
    }


    public function indexCatalog()
    {
        return view('backend.layouts.catalog.index');
    }

    public function create()
    {
        return view('backend.layouts.catalog.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title_post,
            'content' => $request->content_post,
            'slug' => Str::slug($request->title_post, '-'),
        ]);
    }

    public function detailPage($slug)
    {
        $page = Post::where('slug', $slug)->first();
        return view('frontend.pages.detail-page')->with([
            'page' => $page,
        ]);
    }
}
