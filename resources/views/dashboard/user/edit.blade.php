@extends('dashboard.layouts.main')
@section('title','Form User')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<form method="POST" action="/login-dashboard/{{Auth::user()->id}}" >
			@method('PATCH')
			@csrf
			<div class="card">
				<div class="card-header text-center ">
					<b>Form Edit User</b>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{old('nama',$users->nama)}}">
						@error('nama')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control @error('username') is-invalid @enderror" id="username"  name="username" value="{{old('username',$users->username)}}">
						@error('username')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Level</label>
						<input type="text" class="form-control @error('level') is-invalid @enderror" id="level"  name="level" value="{{old('level',$users->level)}}">
						@error('level')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="text" class="form-control @error('email') is-invalid @enderror" id="email"  name="email" value="{{old('email',$users->email)}}">
						@error('email')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control @error('password') is-invalid @enderror" id="password"  name="password" id="floatingPassword" value="{{old('password',$users->password)}}">
						@error('password')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
						<button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-save"></i>  Update</button>
						<a href="{{url('login-dashboard')}}/{{Auth::user()->id}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection