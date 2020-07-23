<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.layouts.sliders.index')->withSliders($sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.layouts.sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->nama_slider = $request->get('nama_slider');
        if ($request->hasFile('gambar_slider')) {
            $gambar = $request->file('gambar_slider');
            $nama_gambar = date('dmyhs-') . Str::slug($request->get('nama_slider'), '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('banner'),  $nama_gambar);
            $slider->gambar_slider = $nama_gambar;
        }
        $slider->save();
        if ($slider) {
            Session::flash('status', 'Slider berhasil ditambahkan');
            return redirect()->back();
        }
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
        $slider = Slider::find($id);
        return view('backend.layouts.sliders.edit')->withSlider($slider);

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
        $slider = Slider::find($id);
        $slider->nama_slider = $request->get('nama_slider');
        if ($request->hasFile('gambar_slider')) {
            if ($slider->nama_slider && file_exists(public_path('banner'), $slider->nama_gambar)) {
                File::delete(public_path('banner'), $slider->nama_slider);
            }
            $gambar = $request->file('gambar_slider');
            $nama_gambar = date('dmyhs-') . Str::slug($request->get('nama_slider'), '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('banner'),  $nama_gambar);
            $slider->gambar_slider = $nama_gambar;
        }
        $slider->save();
        if ($slider) {
            Session::flash('status', 'Slider berhasil ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Slider::find($id);
        $gambar->delete();
        Session::flash('status', 'Slider berhasil dihapus');
        return redirect()->back();
    }
}
