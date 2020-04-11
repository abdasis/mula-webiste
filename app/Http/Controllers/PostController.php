<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DOMDocument;
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
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->content_post, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);

            $image_name = '/upload/' . time() . $key . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();
        $post = Post::create([
            'title' => $request->title_post,
            'content' => $content,
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
