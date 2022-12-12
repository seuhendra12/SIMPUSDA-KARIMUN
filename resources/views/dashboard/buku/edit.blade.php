@extends('dashboard.layouts.main')
@section('title','Form Buku')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/buku-dashboard/{{$bukus->id}}" enctype="multipart/form-data">
			@method('PATCH')
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Edit Buku</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Judul</label>
						<input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"  name="judul" value="{{old('judul',$bukus->judul)}}">
						@error('judul')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Pengarang</label>
						<input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang"  name="pengarang" value="{{old('pengarang',$bukus->pengarang)}}">
						@error('pengarang')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Penerbit</label>
						<input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit"  name="penerbit" value="{{old('penerbit',$bukus->penerbit)}}">
						@error('penerbit')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Tahun Terbit</label>
						<input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"  name="tahun" value="{{old('tahun',$bukus->tahun)}}">
						@error('tahun')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">ISBN</label>
						<input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn"  name="isbn" value="{{old('isbn',$bukus->isbn)}}">
						@error('isbn')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Kategori</label>
						<select class="form-select" name="kategori_id">
							@foreach ($kategoris as $kategori)
							@if (old('kategori_id',$bukus->kategori_id)==$kategori->id)
							<option value="{{$kategori->id}}" selected>{{$kategori->nama}}</option>
							@else
							<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
							@endif
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Klasifikasi</label>
						<input type="text" class="form-control @error('klasifikasi') is-invalid @enderror" id="klasifikasi"  name="klasifikasi" value="{{old('klasifikasi',$bukus->klasifikasi)}}">
						@error('klasifikasi')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Jumlah</label>
						<input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"  name="jumlah" value="{{old('jumlah',$bukus->jumlah)}}">
						@error('jumlah')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label for="file_upload" class="form-label">File Upload</label>
						<input type="file" name="file_upload" value="{{old('file_upload',$bukus->file_upload)}}" class="form-control @error('file_upload') is-invalid @enderror">
						@error('file_upload')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-save"></i>  Update</button>
					<a href="{{url('buku-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
@endsection