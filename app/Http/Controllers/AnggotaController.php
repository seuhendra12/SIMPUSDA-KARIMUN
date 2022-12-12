<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use PDF;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.anggota.index',[
            'anggotas' => Anggota::latest()->filter(request(['search']))->paginate(8)
        ]);
    }

    public function cetak()
    {
        $pdf   = PDF::loadview('dashboard.laporan.laporan_anggota',['anggotas' => Anggota::all()])
                ->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anggota.create', [
          'pekerjaans'=>Pekerjaan::all(),
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
        'nomor_anggota'=>'required|unique:anggotas',
        'nik'=>'required|size:16',
        'nama'=>'required',
        'tempat_lahir'=>'required',
        'tanggal_lahir'=>'required',
        'jenis_kelamin'=>'required',
        'no_telp'=>'required',
        'pekerjaan_id'=>'required',
        'alamat'=>'required'
    ]);
       Anggota::create($validatedData);
       return redirect('/anggota-dashboard')->with('pesan','Data Entered Successfully');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota,$id)
    {
        return view('dashboard.anggota.show',[
            'anggotas' => Anggota::find($id),
            'pekerjaans' =>Pekerjaan::find($id)
        ]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota,$id)
    {
        return view('dashboard.anggota.edit',[
            'anggotas'=>Anggota::find($id),
            'pekerjaans'=>Pekerjaan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota,$id)
    {
        $validatedData=$request->validate([
            'nomor_anggota'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'jenis_kelamin'=>'required',
            'no_telp'=>'required',
            'pekerjaan_id'=>'required',
            'alamat'=>'required'
        ]);
        Anggota::where('id',$id)->update($validatedData);
        return redirect('/anggota-dashboard')->with('update','Data Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota,$id)
    {
        Anggota::destroy($id);
        return redirect('/anggota-dashboard')->with('hapus','Data Deleted Successfully');
    }
}
