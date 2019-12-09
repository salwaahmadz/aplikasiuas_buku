<!DOCTYPE html>
<html>
<head>
	<title>BUKU NUSANTARA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">
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
						<a class="nav-link" href="{{url('cetak_pdf')}}">Laporan Penjualan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<form action="#" method="#" class="form-horizontal">
		<div class="container" style="margin-top: 10%">
			<div class="card" style="width: 50%; margin: auto;">
				<div class="card-body">
					<h1 align="center"><i class="fas fa-check-circle" style="color: green;"></i></h1>
					<h3 style="text-align: center;">Transaksi Berhasil</h3>
					<a href="/index" class="btn btn-primary" style="width: 100%; margin-top: 2%">Home</a>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript" src="{{asset('assets/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>