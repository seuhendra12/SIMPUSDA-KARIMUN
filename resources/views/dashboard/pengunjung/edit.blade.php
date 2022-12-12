@extends('dashboard.layouts.main')
@section('title','Form Pengunjung')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/pengunjung-dashboard/{{ $pengunjungs->id }}" >
			@method('PUT')
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Edit Pengunjung</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Nama Pengunjung</label>
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{old('nama',$pengunjungs->nama)}}">
						@error('nama')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Keperluan</label>
						<input type="text" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan"  name="keperluan" value="{{old('keperluan',$pengunjungs->keperluan)}}">
						@error('keperluan')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">No Telepon</label>
						<input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"  name="no_telp" value="{{old('no_telp',$pengunjungs->no_telp)}}">
						@error('no_telp')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal</label>
						<input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"  name="tanggal" value="{{old('tanggal',$pengunjungs->tanggal)}}">
						@error('tanggal')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
						<button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-save"></i>  Update</button>
						<a href="{{url('pengunjung-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection