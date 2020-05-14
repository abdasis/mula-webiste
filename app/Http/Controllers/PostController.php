<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use DOMDocument;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.layouts.index');
    }


    public function indexCatalog()
    {
        $catalogs = Post::all();
        return view('backend.layouts.catalog.index')->with(['catalogs' => $catalogs]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.layouts.catalog.create')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_post' => 'required|unique:posts,title',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
        }

        if ($request->content_post == null) {
            $request->content_post = 'Belum ada content';
        }

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

        $thumbnail_name = '';
        if ($request->file('thumbnail_post')) {
            $thumbnail = $request->file('thumbnail_post');
            $thumbnail_name = time() . '-' . '.' . $thumbnail->getClientOriginalExtension();
            $file_path = 'thumbnail-images';
            $thumbnail->move($file_path, $thumbnail_name);
        }



        $post = Post::create([
            'title' => $request->title_post,
            'content' => $content,
            'slug' => Str::slug($request->title_post, '-'),
            'thunmbnail' => $thumbnail_name

        ]);

        if ($post) {
            Alert::success('Berhasil', 'Halaman Berhasil di tambahkan');
            return redirect()->route('katalog.index');
        }
    }

    public function detailPage($slug)
    {
        $page = Post::where('slug', $slug)->first();
        return view('frontend.pages.detail-page')->with([
            'page' => $page,
        ]);
    }

    public function hapus($id)
    {
        $post = Post::find($id);
        if (!$post->trashed()) {
            $post->delete();
        }
        Alert::success('Berhasil', 'Katalog Berhasil Dihapus');
        return redirect()->route('katalog.index');
    }
}
