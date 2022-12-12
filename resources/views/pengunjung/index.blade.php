@extends('layouts.main')
@section('title','SIMPUSDA KARIMUN')
@section('container')
<div class="container my-4">
  <main class="form-signin w-100 m-auto my-4">
    <div class="row justify-content-center">
      <div class="col-lg-max"><div class="card">
        <div class="card-body" style="background-color:#9EE1DE">
          <div class="card-body bg-white">
            <h3 class="text-center">Daftar Kunjungan</h3>
            <a href="{{url('pengunjung')}}/create" class="btn  btn-danger mb-3"><i class="fa fa-reply"></i>  Kembali</a>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap text-center bg-white">
                <thead class="bg-dark text-white">
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th>No Telepon</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                @forelse ($pengunjungs as $pengunjung)
                <tbody>
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pengunjung->nama}}</td>
                    <td>{{$pengunjung->keperluan}}</td>
                    <td>{{$pengunjung->no_telp}}</td>
                    <td>{{date('d F Y', strtotime($pengunjung->tanggal))}}</td>
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
  </main>
</div>
{{$pengunjungs ->links('pagination::bootstrap-5')}}
@endsection