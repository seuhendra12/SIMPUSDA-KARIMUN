<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use PDF;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengunjung.index',[
            'pengunjungs' => Pengunjung::latest()->filter(request(['search']))->paginate(10)
        ]);
    }
    public function cetak()
    {
        $pdf   = PDF::loadview('dashboard.laporan.laporan_pengunjung',['pengunjungs' => Pengunjung::all()]);
        return $pdf->stream();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengunjung.create',[
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
        return redirect('/pengunjung-dashboard')->with('pesan','Data Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunjung $pengunjung)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunjung $pengunjung,$id)
    {
        return view('dashboard.pengunjung.edit',[
            'pengunjungs' => Pengunjung::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunjung $pengunjung,$id)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
            'keperluan'=>'required',
            'no_telp'=>'required',
            'tanggal'=>'required'
        ]);
        Pengunjung::where('id',$id)->update($validatedData);
        return redirect('/pengunjung-dashboard')->with('update','Data Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunjung $pengunjung,$id)
    {
        Pengunjung::destroy($id);
        return redirect('/pengunjung-dashboard')->with('hapus','Data Deleted Successfully');
    }
}
