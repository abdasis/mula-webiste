<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loker()
    {
        return view('frontend.pages.lowongan-kerja');
    }

    public function berita()
    {
        return view('frontend.pages.berita');
    }

    public function partner()
    {
        return view('frontend.pages.partner-perusahaan');
    }

    public function industri()
    {
        return view('frontend.pages.industri');
    }
}
