<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Buku</title>
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
<center><h4>Laporan Buku</h4></center>
<table class="table1">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun</th>
			<th>ISBN</th>
			<th>Kategori</th>
			<th>Jumlah</th>
		</tr>		
	</thead>
	@foreach ($bukus as $buku)
	<tbody class="bg-light">
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$buku->judul}}</td>
			<td>{{$buku->pengarang}}</td>
			<td>{{$buku->penerbit}}</td>
			<td>{{$buku->tahun}}</td>
			<td>{{$buku->isbn}}</td>
			<td>{{$buku->kategori->nama}}</td>
			<td>{{$buku->jumlah}}</td>
		</tr>		
	</tbody>
	@endforeach
</table>
</body>
</html>