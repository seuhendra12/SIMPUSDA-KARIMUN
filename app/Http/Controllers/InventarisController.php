<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.inventaris.index',[
            'inventaris' => Inventaris::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.inventaris.create',[
            'inventaris' => Inventaris::all()
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
        'jumlah'=>'required',
        'keterangan'=>'required',
    ]);
       Inventaris::create($validatedData);
       return redirect('/inventaris-dashboard')->with('pesan','Data Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris,$id)
    {
        return view('dashboard.inventaris.edit',[
            'inventaris' => Inventaris::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris,$id)
    {
        $validatedData=$request->validate([
        'nama'=>'required',
        'jumlah'=>'required',
        'keterangan'=>'required',
    ]);
       Inventaris::where('id',$id)->update($validatedData);
       return redirect('/inventaris-dashboard')->with('Update','Data Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris,$id)
    {
        Inventaris::destroy($id);
        return redirect('/inventaris-dashboard')->with('hapus','Data Deleted Successfully');
    }
}
