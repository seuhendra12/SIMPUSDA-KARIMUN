<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Pengunjung;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function banyak()
    {
     return view('dashboard.index',[
        'transaksis' => Transaksi::latest()->paginate(8),
        'anggotas' => Anggota::all(),
        'bukus' => Buku::all(),
        'pengunjungs' => Pengunjung::all(),
    ]);
 }
}
