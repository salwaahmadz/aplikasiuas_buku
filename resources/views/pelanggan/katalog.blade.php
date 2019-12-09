<!DOCTYPE html>
<html>
<head>
	<title>BookWORLD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">
	<!-- END BOOTSTRAP -->
</head>

<body style="padding-top: 56px">
@if(session('sukses'))
<div class="alert alert-success" role="alert">
 {{session('sukses')}}
</div>
@endif

@if(session('gagal'))
<div class="alert alert-danger" role="alert">
 {{session('gagal')}}
</div>
@endif
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Book<b>WORLD</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/index">Beranda
							
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Daftar Buku
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('cetak_pdf')}}">Laporan Penjualan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVBAR -->

	<!-- Container -->
	<div class="container">
		<!-- Call to Action Well -->
		<div class="card text-white bg-primary my-5 py-1 text-center">
			<div class="card-body">
				<p class="text-white m-0">Temukan Buku yang sesuai dengan dirimu di Book<b>World</b></p>
			</div>
		</div>

<form action="/tambahbuku" method="POST">
	{{csrf_field()}}
		<!-- ROW CONTENT -->
		<div class="row">
			<!-- Col-Md-6 -->
			<div class="col-md-8">
				<!-- container -->
				<div class="container" style="display: flex; flex-direction: row; flex-wrap: wrap;">
					<div class="row">
						@foreach($katalogbuku as $kb)
						<div class="col-md-4">	
							<div class="card mr-5" style="width: 200px; height: 450px;margin-top: 5%;">

								<img src="assets/image/blankcard.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									
									<h5 class="card-title">{{$kb->judul_buku}}</h5>
									<p class="card-text" style="top: 10px; position: relative;">Rp {{$kb->harga}}</p>
								</div>
								<div class="card-footer">
									<a href="konfirmasi/{{$kb->id_buku}}" class="btn btn-primary" style="width: 100%;">Beli</a>
									<a href="#" class="btn btn-warning" style="width: 100%;margin-top: 2%">Keranjang</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<!-- end container -->
				</div>
			</div>
			<!-- /Col-Md-6 -->
			<div class="col-md-4">
			<div class="row">
			<!-- KERANJANG -->
			<div class="col-md-12">
				<p>
					<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="width: 100%; margin-top: 3%">Keranjang <i class="fas fa-shopping-cart"></i> </a>
				</p>
				<div class="row">
					<div class="col">
						<div class="collapse multi-collapse" id="multiCollapseExample1">
							<div class="card card-body">
								<table>
									<tr>
										<td rowspan="3" style="width: 110px">
											<img src="assets/image/blankcard.jpg" style="width: 100px;height: 100px">
										</td>
										<td>Nama Buku</td>
									</tr>
									<tr>
										<td>Qty </td>
									</tr>
									<tr>
										<td>Rp</td>
									</tr>
								</table>
								<a href="#" class="btn btn-primary" style="margin-top: 5%">BELI</a>
							</div>
						</div>
					</div>
				</div>

			</div>	
			<!-- END KERANJANG -->

			<!-- TAMBAH BUKU -->

			<div class="col-md-12">
				<p>
					<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample" role="button" aria-expanded="false" aria-controls="multiCollapseExample" style="width: 100%; margin-top: 3%">Tambah Buku Baru <i class="fas fa-plus"></i> </a>
				</p>
				<div class="row">
					<div class="col">
						<div class="collapse multi-collapse" id="multiCollapseExample">
							<div class="card card-body">
								<table>
									<tr>
										<td>
											<b>Informasi Buku</b>
										</td>
									</tr>
									<tr>
										<td>Judul Buku</td>
										<td><input type="text" name="judulbuku"></td>
									</tr>
									<tr>
										<td>Penerbit</td>
										<td><input type="text" name="penerbit"></td>
									</tr>
									<tr>
										<td>Tahun Terbit</td>
										<td><input type="number" name="tahunterbit"></td>
									</tr>
									<tr>
										<td>Kategori</td>
										<td><input type="text" name="kategoribarang"></td>
									</tr>
									<tr>
										<td>Kuantitas</td>
										<td><input type="number" name="kuantitasbarang"></td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>Rp<input type="number" name="hargabarang" style="width: 85%"></td>
									</tr>
								</table>
								<br>
								<button class="btn btn-primary">Tambah Buku</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			<!-- END TAMBAH BUKU -->
			<!-- END ROW CONTENT -->
		</div>
		</form>
		<!-- END CONT -->
	</div>

	<!-- Footer -->
	<footer class="py-3 bg-primary" style="margin-top: 2%;">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Book<b>Wolrd</b> 2019</p>
		</div>
		<!-- /.container -->
	</footer>

	<script type="text/javascript" src="{{asset('assets/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/all.min.js')}}"></script>

</body>
</html>