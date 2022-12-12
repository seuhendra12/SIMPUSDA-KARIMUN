@extends('dashboard.layouts.main')
@section('title','Form Peminjaman')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/transaksi-dashboard" >
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Insert Peminjaman</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Nama Anggota</label>
						<select class="form-select" name="anggota_id">
							<option selected>--Pilih Anggota--</option>
							@foreach ($anggotas as $anggota)
							@if (old('anggota_id')==$anggota->id)
							<option value="{{$anggota->id}}" selected>{{$anggota->nama}}</option>
							@else
							<option value="{{$anggota->id}}">{{$anggota->nama}}</option>
							@endif
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Judul Buku</label>
						<select class="form-select" name="buku_id">
							<option selected>--Pilih Buku--</option>
							@foreach ($bukus as $buku)
							@if (old('buku_id')==$buku->id)
							<option value="{{$buku->id}}" selected>{{$buku->judul}}</option>
							@else
							<option value="{{$buku->id}}">{{$buku->judul}}</option>
							@endif
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Pinjam</label>
						<input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam"  name="tgl_pinjam" value="{{old('tgl_pinjam')}}">
						@error('tgl_pinjam')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Kembali</label>
						<input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali"  name="tgl_kembali" value="{{old('tgl_kembali')}}">
						@error('tgl_kembali')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
						<button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-save"></i>  Submit</button>
						<a href="{{url('inventaris-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection