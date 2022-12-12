<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.transaksi.index',[
            'transaksis' => Transaksi::latest()->paginate(8)
        ]);
    }

    public function cetak()
    {
        $pdf   = PDF::loadview('dashboard.laporan.laporan_transaksi',['transaksis' => Transaksi::all()])
                ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaksi.create',[
            'anggotas'=> Anggota::all(),
            'bukus'=> Buku::all()
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
        'anggota_id'=>'required',
        'buku_id'=>'required',
        'tgl_pinjam'=>'required',
        'tgl_kembali'=>'required',
        'tgl_dikembalikan'=>'nullable'
    ]);
       Transaksi::create($validatedData);
       return redirect('/transaksi-dashboard')->with('pesan','Data Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi,$id)
    {
        return view('dashboard.transaksi.show',[
            'transaksis' => Transaksi::find($id),
            'bukus' =>Buku::find($id),
            'anggotas' =>Anggota::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi,$id)
    {
        return view('dashboard.transaksi.edit',[
            'transaksis'=>Transaksi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi,$id)
    {
        $validatedData=$request->validate([
        'anggota_id'=>'required',
        'buku_id'=>'required',
        'tgl_pinjam'=>'required',
        'tgl_kembali'=>'required',
        'tgl_dikembalikan'=>'required'
    ]);
       Transaksi::where('id',$id)->update($validatedData);
       return redirect('/transaksi-dashboard')->with('pesan','Data Entered Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi,$id)
    {
        Transaksi::destroy($id);
        return redirect('/transaksi-dashboard')->with('hapus','Data Deleted Successfully');
    }
}
