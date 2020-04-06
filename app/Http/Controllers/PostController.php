<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}