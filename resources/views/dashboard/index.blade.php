
@extends('dashboard.layouts.main')
@section('title','Dashboard')
@section('container')
<div class="col">
  <div class="row">
    <div class="col-sm-6">
      <h3>Dashboard</h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div><!-- /.col -->
  </div>
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$pengunjungs->count()}}</h3>

          <p>Pengunjung</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="{{url('pengunjung-dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$bukus->count()}}</h3>

          <p>Buku</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="{{url('buku-dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$anggotas->count()}}</h3>

          <p>Anggota</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="{{url('anggota-dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$transaksis->count()}}</h3>

          <p>Transaksi</p>
        </div>
        <div class="icon">
          <i class="fa fa-retweet"></i>
        </div>
        <a href="{{url('transaksi-dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Peminjaman Terbaru</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Status</th>
              </tr>
            </thead>
            @forelse ($transaksis as $transaksi)
                  <tbody>
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$transaksi->anggota->nama}}</td>
                      <td>{{$transaksi->buku->judul}}</td>
                      <td>
                         @if($transaksi->tgl_dikembalikan == null)
                                <a href="transaksi-dashboard/{{$transaksi->id}}/edit" class="badge badge-primary">Pengembalian</a>
                            @else
                                <p class="badge badge-success">Dikembalikan</p>
                            @endif
                      </td>
                    </tr>
                    @empty
                    <td colspan="5" class="text-center">Data Tidak Ada</td>
                  </tbody>
                  @endforelse
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
