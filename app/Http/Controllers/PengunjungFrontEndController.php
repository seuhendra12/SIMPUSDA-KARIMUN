<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;

class PengunjungFrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengunjung.index',[
            'pengunjungs' => Pengunjung::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengunjung.create',[
            'pengunjungs' => Pengunjung::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
            'keperluan'=>'required',
            'no_telp'=>'required',
            'tanggal'=>'required'
        ]);
        Pengunjung::create($validatedData);
        return redirect('/pengunjung')->with('pesan','Data Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunjung $pengunjung)
    {
        //
    }
}
