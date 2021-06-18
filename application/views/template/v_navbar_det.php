<!-- Navabar -->
<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand" href="../index.html">
			<img src="<?= base_url(); ?>assets/dist/img/navbar-brand.svg" width="300" class="d-inline-block align-center" alt="VLMS">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('landingpage/home'); ?>">Beranda <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('landingpage/home'); ?>">VLMS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($this->uri->segment(2) == "tentang") { echo "active"; } ?>" href="<?= base_url('landingpage/tentang'); ?>">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('landingpage/home'); ?>">Projek</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php if($this->uri->segment(2) == "elibrary" || $this->uri->segment(2) == "produk" || $this->uri->segment(2) == "artikel" || $this->uri->segment(2) == "galeri") { echo "active"; } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Publikasi
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item <?php if($this->uri->segment(2) == "elibrary") { echo "active"; } ?>" href="<?= base_url('landingpage/elibrary'); ?>">E-library</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item <?php if($this->uri->segment(2) == "produk") { echo "active"; } ?>" href="<?= base_url('landingpage/produk'); ?>">Produk & Aplikasi</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item <?php if($this->uri->segment(2) == "artikel") { echo "active"; } ?>" href="<?= base_url('landingpage/artikel'); ?>">Artikel</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('landingpage/home'); ?>">Foto Kegiatan</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('landingpage/home'); ?>">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('landingpage/home'); ?>">Kontak</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-sm-2 login-btn text-uppercase" href="#">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->