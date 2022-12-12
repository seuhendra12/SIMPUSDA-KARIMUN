<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Pengunjung</title>
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
<center><h4>Laporan Pengunjung</h4></center>
<table class="table1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Keperluan</th>
			<th>No Telepon</th>
			<th>Tanggal</th>
		</tr>		
	</thead>
	@foreach ($pengunjungs as $pengunjung)
	<tbody class="bg-light">
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$pengunjung->nama}}</td>
			<td>{{$pengunjung->keperluan}}</td>
			<td>{{$pengunjung->no_telp}}</td>
			<td>{{date('d F Y', strtotime($pengunjung->tanggal))}}</td>
		</tr>		
	</tbody>
	@endforeach
</table>
</body>
</html>