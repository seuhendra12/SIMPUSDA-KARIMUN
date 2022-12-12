<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Anggota</title>
	<style type="text/css">
		.table1 {
			font-family: sans-serif;
			color: #232323;
			border-collapse: collapse;
		}

		.table1, th, td {
			border: 1px solid #000000;
			padding: 8px 20px;
			font-size: 12px;
		}
	</style>
</head>
<body>
<center><h4>Laporan Anggota</h4></center>
<table class="table1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nomor Anggota</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tempat, Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>No Telepon</th>
			<th>Pekerjaan</th>
			<th>Alamat</th>
		</tr>		
	</thead>
	@foreach ($anggotas as $anggota)
	<tbody class="bg-light">
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$anggota->nomor_anggota}}</td>
			<td>{{$anggota->nik}}</td>
			<td>{{$anggota->nama}}</td>
			<td>{{$anggota->tempat_lahir}}, {{date('d F Y', strtotime($anggota->tanggal_lahir))}}</td>
			<td>{{$anggota->jenis_kelamin}}</td>
			<td>{{$anggota->no_telp}}</td>
			<td>{{$anggota->pekerjaan->nama}}</td>
			<td>{{$anggota->alamat}}</td>
		</tr>		
	</tbody>
	@endforeach
</table>
</body>
</html>