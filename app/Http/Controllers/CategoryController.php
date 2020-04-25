<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.layouts.category.index')->with(['categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.layouts.category.create')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|max:100'
        ]);

        if ($validator->fails()) {
            Alert::warning('Opps', 'Terjadi kesalahan saat memasukan data');
        }

        $categories = Category::create([
            'category_name' => $request->category_name
        ]);

        if ($categories) {
            Alert::success('Berhasil', 'Kategori Berhasil Ditambahkan');
            return redirect()->route('category');
        }

    }
}
