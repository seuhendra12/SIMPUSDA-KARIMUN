<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Transaksi</title>
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
	<center><h4>Laporan Transaksi</h4></center>
	<table class="table1">
		<thead>
			<tr>
				<th style="width: 10px">No</th>
				<th>Nama</th>
				<th>Judul Buku</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Tanggal Dikembalikan</th>
				<th>Keterlambatan</th>
				<th>Denda</th>
				<th>Status</th>
			</tr>		
		</thead>
		@foreach ($transaksis as $transaksi)
		<tbody class="bg-light">
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$transaksi->anggota->nama}}</td>
				<td>{{$transaksi->buku->judul}}</td>
				<td>{{date('d F Y', strtotime($transaksi->tgl_pinjam))}}</td>
				<td>{{date('d F Y', strtotime($transaksi->tgl_kembali))}}</td>
				<td>
					@if($transaksi->tgl_dikembalikan == null)
					Belum dikembalikan
					@else
					{{date('d F Y', strtotime($transaksi->tgl_dikembalikan))}}
					@endif
				</td>
				<td>
					@if($transaksi->tgl_dikembalikan == null)
					Belum dikembalikan
					@else
					<?php
					$tgl1 = new DateTime($transaksi->tgl_kembali);
					$tgl2 = new DateTime($transaksi->tgl_dikembalikan);
					$d = $tgl2->diff($tgl1)->days;
					$denda = $d * 1000;
					echo $d." hari";
					?>
					@endif
				</td>
				<td>
					@if($transaksi->tgl_dikembalikan == null)
					Belum dikembalikan
					@else
					Rp.{{$denda}},-
					@endif
				</td>
				<td>
					@if($transaksi->tgl_dikembalikan == null)
					<p class="badge badge-success">Belum dikembalikan</p>
					@else
					<p class="badge badge-success">Dikembalikan</p>
					@endif
				</td>
			</tr>		
		</tbody>
		@endforeach
	</table>
</body>
</html>