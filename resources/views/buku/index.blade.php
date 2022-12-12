@extends('layouts.main')
@section('title','SIMPUSDA KARIMUN')
@section('container')
<div class="container my-4">
  <main class="form-signin w-100 m-auto my-4">
    <div class="row justify-content-center">
      <div class="col-lg-max"><div class="card">
        <div class="card-body" style="background-color:#9EE1DE">
          <div class="card-body bg-white">
            <h3 class="text-center">Daftar Buku</h3>
            <a href="{{url('buku')}}/create" class="btn btn-danger mb-3" type="button"><i class="fa fa-reply"></i>  Kembali</a>
            <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap text-center">
                    <thead class="bg-dark text-white">
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Cover</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    @forelse ($bukus as $buku)
                    <tbody>
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$buku->judul}}</td>
                        <td>{{$buku->kategori->nama}}</td>
                        <td><img src="{{ asset('/images/'.$buku->file_upload) }}" width="30px"></td>
                        <td>
                         @if($buku->jumlah > 0)
                                <p class="badge badge-success">Tersedia</p>
                            @else
                                <p class="badge badge-success">Kosong</p>
                            @endif
                        </td>
                      </tr>
                      @empty
                      <td colspan="6" class="text-center">Tidak ada data...</td>
                    </tbody>
                    @endforelse
                  </table>
                </div>
        </div>
      </div>
    </div>
  </main>
</div>
{{$bukus ->links('pagination::bootstrap-5')}}
@endsection