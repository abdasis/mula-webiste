<?php

namespace App\Http\Controllers;

use App\Http\Requests\LokerRequest;
use App\Models\Loker;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokers = Loker::orderBy('created_at', 'DESC')->get();
        return view('backend.layouts.loker.index')->withLokers($lokers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.layouts.loker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokerRequest $request)
    {

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->isi_keterangan, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

        $newLoker = new Loker();
        $newLoker->posisi = $request->get('posisi');
        $newLoker->isi_keterangan = $request->get('isi_keterangan');
        $newLoker->save();

        return redirect()->back()->with('status', 'Info Loker Terbaru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function show(Loker $loker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function edit(Loker $loker)
    {
        $loker = Loker::find($loker->id);
        return view('backend.layouts.loker.edit')->withLoker($loker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loker $loker)
    {
        $loker = Loker::find($loker->id);
        $loker->posisi = $request->get('posisi');
        $loker->isi_keterangan = $request->get('isi_keterangan');
        $loker->save();
        Session::flash('status', 'Lowongan berhasil di update');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loker $loker)
    {
        //
    }
}
