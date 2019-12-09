<!DOCTYPE html>
<html>
<head>
	<title>BookWORLD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
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
					<li class="nav-item active">
						<a class="nav-link" href="/index">Beranda
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/katalog">Daftar Buku</a>
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
		<!-- Heading Row -->
		<div class="row align-items-center my-5">
			<div class="col-lg-7">
				<!-- <img class="img-fluid rounded mb-4 mb-lg-0" src="assets/image/headline_1.jpg" alt=""> -->
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/image/headline_1.jpg" class="d-block w-100" style="width:400px; height: 400px; border-radius: 10px">
						</div>
						<div class="carousel-item">
							<img src="assets/image/headline_2.jpg" class="d-block w-100" style="width: 400px; height: 400px; border-radius: 10px">
						</div>
					</div>
				</div>
			</div>
			<!-- /.col-lg-8 -->
			<div class="col-lg-5">
				<h1 class="font-weight-light">Book<b>World</b></h1>
				<p>Berbagai Buku Pendidikan, Inspiratif, Novel, Sejarah dll. Tersedia sekarang di BookWORLD</p>
			</div>
			<!-- /.col-md-4 -->
		</div>
		<!-- /.row -->

		<!-- Call to Action Well -->
		<div class="card text-white bg-primary my-5 py-1 text-center">
			<div class="card-body">
				<p class="text-white m-0">Temukan Buku yang sesuai dengan dirimu di Book<b>World</b></p>
			</div>
		</div>

		<!-- ROW CONTENT -->
		<div class="row">
			<!-- card -->
			<div class="col col-sm-3 mb-5">
				<!-- Link -->
				<a href="#">
					<div class="card ml-100">
						<div class="card-body">
							<div class="card ml-auto">
								<img src="assets/image/blankcard.jpg">
							</div>
							<h5 class="card-title text-center mt-3">BEST SELLER</h5>
						</div>
					</div>
					<!-- end link -->
				</a>
				<!-- end card -->
			</div>

			<!-- card -->
			<div class="col col-md-3 mb-5">
				<!-- Link -->
				<a href="#">
					<div class="card ml-100">
						<div class="card-body">
							<div class="card ml-auto">
								<img src="assets/image/blankcard.jpg">
							</div>
							<h5 class="card-title text-center mt-3">BEST INSPIRATION</h5>
						</div>
					</div>
					<!-- end link -->
				</a>
				<!-- end card -->
			</div>

			<!-- card -->
			<div class="col col-md-3 mb-5">
				<!-- Link -->
				<a href="#">
					<div class="card ml-100">
						<div class="card-body">
							<div class="card ml-auto">
								<img src="assets/image/blankcard.jpg">
							</div>
							<h5 class="card-title text-center mt-3">BEST NOVEL</h5>
						</div>
					</div>
					<!-- end link -->
				</a>
				<!-- end card -->
			</div>	

			<!-- card -->
			<div class="col col-md-3 mb-5">
				<!-- Link -->
				<a href="#">
					<div class="card ml-100">
						<div class="card-body">
							<div class="card ml-auto">
								<img src="assets/image/blankcard.jpg">
							</div>
							<h5 class="card-title text-center mt-3">RECOMMENDATION</h5>
						</div>
					</div>
					<!-- end link -->
				</a>
				<!-- end card -->
			</div>

		</div>
		<!-- END ROW CONTENT -->

	<!-- <h3>APLIKASI PEMBELIAN BUKU NUSANTARA</h3>
	<form method="POST" action="konfirmasip">
		{{ csrf_field() }}
		<table border="1px">
			<th colspan="3">BELI BUKU
				<tr>
					<td>JUDUL BUKU</td>
					<td colspan="2">
						<input type="text" name="judulbuku">
					</td>
				</tr>

				<tr>
					<td>PENERBIT</td>
					<td colspan="2">
						<input type="text" name="penerbit">
					</td>
				</tr>

				<tr>
					<td>TAHUN TERBIT</td>
					<td colspan="2">
						<input type="text" name="tahunterbit">
					</td>
				</tr>

				<tr>
					<td>KATEGORI</td>
					<td colspan="2">
						<input type="text" name="kategori">
					</td>
				</tr>

				<tr>
					<td>KUANTITAS</td>
					<td>
						<input type="number" name="kuantitas">
					</td>
					<td>Package (1pack = 50 buku)</td>
				</tr>

				<tr>
					<td colspan="3">
						<input type="submit" name="konfirmasi" value="Konfirmasi">
					</td>
				</tr>
			</th>
		</table>
	</form> -->
	<!-- END CONTAINER -->
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
<script type="text/javascript">
	$('.carousel').carousel();
</script>
</body>
</html>