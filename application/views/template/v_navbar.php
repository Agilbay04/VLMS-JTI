<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.html">
			<img src="<?= base_url(); ?>assets/dist/img/navbar-brand.svg" width="300" class="d-inline-block align-center" alt="VLMS">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link active" href="#" data-scroll-nav="0">Beranda <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-scroll-nav="1">VLMS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-scroll-nav="2">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-scroll-nav="3">Projek</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Publikasi
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?= base_url('landingpage/elibrary'); ?>">E-library</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-scroll-nav="4">Produk & Aplikasi</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-scroll-nav="5">Artikel</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-scroll-nav="6">Foto Kegiatan</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-scroll-nav="7">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-scroll-nav="8">Kontak</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-sm-2 login-btn" href="<?= base_url('auth/login'); ?>">Login</a>
			</li>
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->
