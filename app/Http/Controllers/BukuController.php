<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use PDF;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.buku.index',[
            'bukus' => Buku::latest()->filter(request(['search']))->paginate(8)
        ]);
    }
    public function cetak()
    {
        $pdf   = PDF::loadview('dashboard.laporan.laporan_buku',['bukus' => Buku::all()])
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
        return view('dashboard.buku.create', [
          'kategoris'=>Kategori::all(),
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
            'judul'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'tahun'=>'required',
            'isbn'=>'required',
            'kategori_id'=>'required',
            'klasifikasi'=>'required',
            'jumlah'=>'required',
            'file_upload' => 'nullable|image|mimes:png,jpg'
        ]);
            if ($request -> hasFile('file_upload')) {
              $namaFile = 'img_'.time().'_'.$request -> file_upload -> getClientOriginalName();
              $request -> file_upload -> move('images', $namaFile);
            }
            else {
                $namaFile = '';
            }
            $validatedData['file_upload'] = $namaFile;
        Buku::create($validatedData);
        return redirect('/buku-dashboard')->with('pesan','Data Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku,$id)
    {
        return view('dashboard.buku.show',[
            'bukus' => Buku::find($id),
            'kategoris' =>Kategori::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku,$id)
    {
        return view('dashboard.buku.edit',[
            'bukus'=>Buku::find($id),
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku,$id)
    {
        $validatedData=$request->validate([
            'judul'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'tahun'=>'required',
            'isbn'=>'required',
            'kategori_id'=>'required',
            'klasifikasi'=>'required',
            'jumlah'=>'required',
            'file_upload' => 'nullable|image|mimes:png,jpg'
        ]);
            if ($request -> hasFile('file_upload')) {
              $namaFile = 'img_'.time().'_'.$request -> file_upload -> getClientOriginalName();
              $request -> file_upload -> move('images', $namaFile);
            }
            else {
                $namaFile = '';
            }
            $validatedData['file_upload'] = $namaFile;
            Buku::where('id',$id)->update($validatedData);
            return redirect('/buku-dashboard')->with('update','Data Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku,$id)
    {
        $cari = Buku::find($id);
        if ($cari -> file_upload='') {
          $image_url = public_path().'/images/'.$cari->file_upload;
          unlink($image_url);
        }
        Buku::destroy($id);
        return redirect('buku-dashboard')->with('hapus','Data Deleted Successfully');
    }

}
