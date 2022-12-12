@extends('dashboard.layouts.main')
@section('title','Detail Peminjaman')
@section('container')
<div class="col">
  <div class="row">
    <div class="col-sm-6">
      <h3>Halaman Detail Peminjaman</h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Detail Peminjaman</li>
      </ol>
    </div><!-- /.col -->
  </div>
  <div>
    <div class="row justify-content-center">
      <div class="card mb-3 col-sm-6">
        <div class="card-body text-center">
          <h3>Detail Peminjaman</h3>
        </div>
        <table class="table">
          <tr>
            <td>Nomor Anggota</td>
            <td>:</td>
            <td>{{$transaksis->anggota->nomor_anggota ??''}}</td>
          </tr>
          <tr>
            <td>Nama Anggota</td>
            <td>:</td>
            <td>{{$transaksis->anggota->nama ??''}}</td>
          </tr>
          <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td>{{$transaksis->buku->judul ??''}}</td>
          </tr>
          <tr>
            <td>Tanggal Pinjam</td>
            <td>:</td>
            <td>{{date('d F Y', strtotime($transaksis->tgl_pinjam))}}</td>
          </tr>
          <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td>{{date('d F Y', strtotime($transaksis->tgl_kembali))}}</td>
          </tr>
          <tr>
            <td>Tanggal Dikembalikan</td>
            <td>:</td>
            <td>
              @if($transaksis->tgl_dikembalikan == null)
                Belum dikembalikan
              @else
                {{date('d F Y', strtotime($transaksis->tgl_dikembalikan))}}
              @endif
            </td>
          </tr>
          <tr>
            <td>Keterlambatan</td>
            <td>:</td>
            <td>
              @if($transaksis->tgl_dikembalikan == null)
                Belum dikembalikan
              @else
                <?php
              $tgl1 = new DateTime($transaksis->tgl_kembali);
              $tgl2 = new DateTime($transaksis->tgl_dikembalikan);
              $d = $tgl2->diff($tgl1)->days;
               $denda = $d * 1000;
              echo $d." hari";
              ?>
              @endif
            </td>
          </tr>
          <tr>
            <td>Denda</td>
            <td>:</td>
            <td>
              @if($transaksis->tgl_dikembalikan == null)
                Belum dikembalikan
              @else
                Rp.{{$denda}},-
              @endif
          </td>
          </tr>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-2">
          <a href="{{url('transaksi-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection