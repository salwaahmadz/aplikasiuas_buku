<!DOCTYPE html>
<html>
<head>
	<title>BUKU NUSANTARA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<!-- END BOOTSTRAP -->
</head>

<body style="padding-top: 80px">

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">BUKU <b>NUSANTARA</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/index">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/katalog">Katalog Buku
						<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Laporan Penjualan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<form action="/proses" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="container">
		<h3 style="text-align: center;">KONFIRMASI PEMBELIAN</h3>
			<div class="card" style="width: 50%; margin: auto">
				<div class="card-body">
					<table style="width: 100%; height: 100px">
						
						@foreach($belibuku as $bb)						
						<tr>
							<td>ID BUKU</td>

							<td><input type="text" name="idbuku" value="{{$bb->id_buku}}" style="width: 100%" readonly></td>
						</tr>

						<tr>
							<td>JUDUL BUKU</td>
							<td><input type="text" name="judulbuku" value="{{$bb->judul_buku}}" style="width: 100% " readonly></td>
						</tr>

						<tr>
							<td>PENERBIT</td>
							<td><input type="text" name="penerbit" value="{{$bb->penerbit}}" style="width: 100%" readonly></td>
						</tr>

						<tr>
							<td>TAHUN TERBIT</td>
							<td><input type="text" name="tahunterbit" value="{{$bb->tahun_terbit}}" style="width: 100%" readonly></td>
						</tr>

						<tr>
							<td>KATEGORI</td>
							<td><input type="text" name="kategori" value="{{$bb->kategori}}" style="width: 100%" readonly></td>
						</tr>

						<tr>
							<td>KUANTITAS</td>
							<td>
								<!-- <input type="number" name="bkuantitas" value="" style="width: 100%"> -->
								<select style="width: 100%" name="bkuantitas" id="jumlahbarang">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							<td>
						</tr>

						<tr>
							<td>HARGA</td>
							<td><input id="totalharga" type="text" name="harga" value="{{$bb->harga}}" style="width: 100%" readonly></td>
						</tr>
						@endforeach
					</table>
					<br>
					<button type="submit" class="btn btn-primary" style="width: 100%">Beli Buku</button>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript" src="{{asset('assets/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<?php 
		foreach($belibuku as $bb){
	?>
<script type="text/javascript">
    $(document).ready(function () {
      var harga = <?= $bb->harga?>;
      $('#jumlahbarang').change(function() {
        var jumlah = $('#jumlahbarang option:selected').val();
        var totalharga = parseInt(jumlah) * parseInt(harga);
          $('#totalharga').val(totalharga);
      });
    });
</script>
<?php } ?>
</body>
</html>