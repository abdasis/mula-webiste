<?php

namespace App\Http\Controllers;

use App\Models\PartnerPerusahaan;
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
        $partners = PartnerPerusahaan::paginate(8);
        return view('frontend.pages.partner-perusahaan')->withPartners($partners);
    }

    public function industri()
    {
        return view('frontend.pages.industri');
    }
}
