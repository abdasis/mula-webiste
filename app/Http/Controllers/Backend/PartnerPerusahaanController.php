<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PartnerPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PartnerPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = PartnerPerusahaan::all();
        return view('backend.pages.partner.index')->withPartners($partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use($request) {
            $partner = new PartnerPerusahaan();
            $partner->nama_perusahaan = $request->get('nama_perusahaan');
            $partner->kantor_perusahaan = $request->get('kantor_perusahaan');
            $partner->website_perusahaan = $request->get('website_perusahaan');
            $partner->tentang_perusahaan = $request->get('tentang_perusahaan');
            if ($request->hasFile('logo_perusahaan')) {
                $gambar = $request->file('logo_perusahaan');
                $nama_gambar = 'logo-' . Str::slug($request->get('nama_perusahaan')) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('logo-partner'), $nama_gambar);
                $partner->logo_perusahaan = $nama_gambar;
            }
            $partner->save();
        });

        Session::flash('status', 'Data berhasil di tambahkan');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = PartnerPerusahaan::find($id);
        return view('backend.pages.partner.edit')->withPartner($partner);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use($request, $id) {
            $partner = PartnerPerusahaan::find($id);
            $partner->nama_perusahaan = $request->get('nama_perusahaan');
            $partner->kantor_perusahaan = $request->get('kantor_perusahaan');
            $partner->website_perusahaan = $request->get('website_perusahaan');
            $partner->tentang_perusahaan = $request->get('tentang_perusahaan');
            if ($request->hasFile('logo_perusahaan')) {
                $gambar = $request->file('logo_perusahaan');
                $nama_gambar = 'logo-' . Str::slug($request->get('nama_perusahaan')) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('logo-partner'), $nama_gambar);
                $partner->logo_perusahaan = $nama_gambar;
            }
            $partner->save();
        });

        Session::flash('status', 'Data berhasil di tambahkan');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = PartnerPerusahaan::find($id);
        $partner->delete();
        Session::flash('status', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
