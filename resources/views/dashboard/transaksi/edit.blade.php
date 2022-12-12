@extends('dashboard.layouts.main')
@section('title','Form Pengembalian')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/transaksi-dashboard/{{$transaksis->id}}" >
			@method('PATCH')
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Insert Pengembalian</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">ID Anggota</label>
						<input type="text" class="form-control @error('anggota_id') is-invalid @enderror" id="anggota_id"  name="anggota_id" value="{{old('anggota_id',$transaksis->anggota_id)}}" readonly>
						@error('anggota_id')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">ID Buku</label>
						<input type="text" class="form-control @error('buku_id') is-invalid @enderror" id="buku_id"  name="buku_id" value="{{old('buku_id',$transaksis->buku_id)}}" readonly>
						@error('buku_id')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Pinjam</label>
						<input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam"  name="tgl_pinjam" value="{{old('tgl_pinjam',$transaksis->tgl_pinjam)}}" readonly>
						@error('tgl_pinjam')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Kembali</label>
						<input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali"  name="tgl_kembali" value="{{old('tgl_kembali',$transaksis->tgl_kembali)}}" readonly>
						@error('tgl_kembali')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Dikembalikan</label>
						<input type="date" class="form-control @error('tgl_dikembalikan') is-invalid @enderror" id="tgl_dikembalikan"  name="tgl_dikembalikan" value="{{old('tgl_dikembalikan')}}">
						@error('tgl_dikembalikan')
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