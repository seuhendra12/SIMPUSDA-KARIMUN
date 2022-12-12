@extends('dashboard.layouts.main')
@section('title','Form Inventaris')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/inventaris-dashboard/{{ $inventaris->id }}" >
			@method('PATCH')
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Insert Inventaris</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Nama Barang</label>
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{old('nama',$inventaris->nama)}}">
						@error('nama')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Jumlah</label>
						<input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"  name="jumlah" value="{{old('jumlah',$inventaris->jumlah)}}">
						@error('jumlah')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Keterangan</label>
						<input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan"  name="keterangan" value="{{old('keterangan',$inventaris->keterangan)}}">
						@error('keterangan')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
						<button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-save"></i>  Update</button>
						<a href="{{url('inventaris-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection