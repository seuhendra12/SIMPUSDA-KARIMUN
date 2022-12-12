@extends('dashboard.layouts.main')
@section('title','Form Anggota')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/anggota-dashboard" >
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Insert Anggota</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Nomor Anggota</label>
						<input type="text" class="form-control @error('nomor_anggota') is-invalid @enderror" id="nomor_anggota"  name="nomor_anggota" value="{{old('nomor_anggota',rand(1000,99999))}}" readonly>
						@error('nomor_anggota')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">NIK</label>
						<input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"  name="nik" value="{{old('nik')}}">
						@error('nik')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{old('nama')}}">
						@error('nama')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tempat Lahir</label>
						<input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"  name="tempat_lahir" value="{{old('tempat_lahir')}}">
						@error('tempat_lahir')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"  name="tanggal_lahir" value="{{old('tanggal_lahir')}}" id="datepicker">
						@error('tanggal_lahir')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Jenis Kelamin</label>
						<div class="d-flex">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jenis_kelamin" value="L" {{old('jenis_kelamin')=='L'?'checked' : ''}}checked>Laki-laki
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin')=='P')>Perempuan
							</div>
						</div>
						@error('jenis_kelamin')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">No Telepon</label>
						<input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"  name="no_telp" value="{{old('no_telp')}}">
						@error('no_telp')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Pekerjaan</label>
						<select class="form-select" name="pekerjaan_id">
							<option selected>--pilih pekerjaan--</option>
							@foreach ($pekerjaans as $pekerjaan)
							@if (old('pekerjaan_id')==$pekerjaan->id)
							<option value="{{$pekerjaan->id}}" selected>{{$pekerjaan->nama}}</option>
							@else
							<option value="{{$pekerjaan->id}}">{{$pekerjaan->nama}}</option>
							@endif
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{old('alamat')}}</textarea>
						@error('alamat')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
						<button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-save"></i>  Submit</button>
						<a href="{{url('anggota-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection