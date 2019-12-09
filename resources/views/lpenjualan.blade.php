<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN PENJUALAN BUKU</title>
	
	<!-- BOOTSTRAP -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- END BOOTSTRAP -->
</head>
<body>
	<style type="text/css">
		/*table tr td,
		table tr th{
			font-size: 9pt;
		}*/
		table {
  border-collapse: collapse;
}
 th {
  background: #ccc;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
}

tr:nth-child(even) {
  background: #efefef;
}

tr:hover {
  background: #d1d1d1;
}
	</style>
	<center>
		<h5>LAPORAN PENJUALAN BUKU</h4>
	</center>

	<table border="1px" style="margin: auto;">
		<thead>
			<tr>
				<th>ID Transaksi</th>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Kategori</th>
				<th>Kuantitas</th>
				<th>Harga</th>
				<th>Tanggal Terjual</th>
			</tr>
		</thead>
		<tbody>
			@foreach($penjualan as $p)
			<tr>
				<td>{{$p->id_transaksi}}</td>
				<td>{{$p->id_buku}}</td>
				<td>{{$p->judul_buku}}</td>
				<td>{{$p->penerbit}}</td>
				<td>{{$p->tahun_terbit}}</td>
				<td>{{$p->kategori}}</td>
				<td>{{$p->kuantitas}}</td>
				<td>{{$p->harga}}</td>
				<td>{{$p->tanggalterjual}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>