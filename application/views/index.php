<!-- Start Home -->
<section class="home d-flex align-items-center" id="home" data-scroll-index="0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7">
				<div class="home-text">
					<h1>Grup Keahlian dan Riset V</h1>
					<h2>Kecerdasan Buatan</h2>
					<div class="dropdown-divider"></div>
					<p>Laboratorium Rekayasa Sistem Informasi <br>
					Jurusan Teknologi Informasi <br>
					Politeknik Negeri Jember Kampus I Jember, Indonesia.
					</p>
					<div class="home-btn">
						<a href="#" class="btn btn-1" data-scroll-goto="2">Selengkapnya</a>
						<button type="button" class="btn btn-2 join" data-scroll-goto="3">Join Us!</button>
					</div>
				</div>
			</div>
			<div class="col-md-5 text-center">
				<div class="home-img">
					<img src="<?= base_url(); ?>assets/dist/img/polije.png" alt="polije">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Home -->

<!-- Start Vlms -->
<section class="vlms section-padding" id="vlms" data-scroll-index="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
			<div class="section-title">
				<h2>Virtual Lab <span>Management System</span></h2>
			</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="icon"><i class="fas fa-users"></i></div>
					<h3>Membership Lab</h3>
					<p>Sistem rekrutmen anggota lab untuk mahasiswa</p>
					<!-- <button type="button" class="btn btn-2">Selengkapnya</button> -->
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="icon"><i class="fas fa-toolbox"></i></div>
					<h3>Pinjam Alat</h3>
					<p>Sistem peminjaman alat laboratorium untuk keperluan riset</p>
					<!-- <button type="button" class="btn btn-2">Selengkapnya</button> -->
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="icon"><i class="fas fa-calendar"></i></div>
					<h3>Reservasi</h3>
					<p>Sistem booking peminjaman ruangan lab untuk keperluan riset</p>
					<!-- <button type="button" class="btn btn-2">Selengkapnya</button> -->
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="icon"><i class="fas fa-bell"></i></div>
					<h3>Event Lab</h3>
					<p>Sistem notifikasi dan penjadwalan kegiatan lab</p>
					<!-- <button type="button" class="btn btn-2">Selengkapnya</button> -->
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="icon"><i class="fas fa-book"></i></div>
					<h3>E-Library</h3>
					<p>Kumpulan e-resources/e-book yang dimiliki oleh Garis<p>
					<!-- <a href="#" class="btn btn-2">Selengkapnya</a> -->
				</div> 
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="icon"><i class="fas fa-mobile"></i></div>
					<h3>Pameran Produk & Aplikasi</h3>
					<p>Kumpulan produk/aplikasi unggulan hasil riset Garis<p>
					<!-- <a href="#" class="btn btn-2">Selengkapnya</a> -->
				</div> 
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="vlms-btn">
				<a href="<?= base_url('auth/login'); ?>" class="btn btn-2 align-items-center">
					Login Sekarang
					<i class="fas fa-arrow-right pl-2"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- End Vlms -->

<!-- Start Tentang -->
<section class="tentang section-padding" id="tentang" data-scroll-index="2">
	<div class="container">
		<div class="row align-items-top">
			<div class="col-lg-6 col-md-5 d-flex align-items-center justify-content-center">
				<div class="tentang-img">
					<img src="<?= base_url(); ?>assets/dist/img/lab/lab-rsi.jpg" class="img-fluid img-responsive" alt="lab-rsi">
				</div>
			</div>
			<div class="col-lg-6 col-md-7">
				<div class="section-title">
					<h2>Tentang <span>GARIS V</span></h2>
				</div>
				<div class="tentang-text">
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni quod cumque 
						corrupti doloribus consequuntur molestias quae quaerat. Vitae porro voluptatum 
						suscipit non. Aliquid mollitia amet optio sit iste aperiam ipsa Lorem ipsum dolor 
						sit amet consectetur adipisicing elit. Pariatur, officia quae a nulla, aliquid iste 
						adipisci excepturi eligendi quos quaerat asperiores modi illum dolores provident explicabo 
						maxime natus, ullam quibusdam.
					</p>
				</div>
				<div class="tentang-btn">
					<a href="<?= base_url('landingpage/tentang'); ?>" class="btn btn-2">Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Tentang -->

<!-- Start Project -->
<section class="projek section-padding" id="tentang" data-scroll-index="3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2>Projek GARIS V <span>Kecerdasan Buatan</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<!-- List dosen -->
                <div class="card card-kategori mb-4">
                    <h5 class="card-header font-weight-bold bg-main-color text-white">
                        <i class="fas fa-user-tie text-color-1 pr-2"></i> 
						Dosen
                    </h5>
                    <div class="card-body list-dosen">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#dosen-1" role="tab" aria-controls="v-pills-home" aria-selected="true">
								<i class="fas fa-dot-circle pr-2"></i>
								Bety Etikasari
							</a>
							<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dosen-2" role="tab" aria-controls="v-pills-profile" aria-selected="false">
								<i class="fas fa-dot-circle pr-2"></i>
								Mukhammad Angga Gumilang
							</a>
							<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#dosen-3" role="tab" aria-controls="v-pills-messages" aria-selected="false">
								<i class="fas fa-dot-circle pr-2"></i>
								Deny Trias Utomo
							</a>
						</div>
					</div>
                </div>
				<!-- End list dosen -->
			</div>
			
			<div class="col-lg-8">
				<!-- List projek -->
				<div class="card card-kategori mb-4">
					<h5 class="card-header font-weight-bold bg-main-color text-white">
						<i class="fas fa-project-diagram text-color-1 pr-2"></i> 
						Projek
					</h5>
					<!-- Item projek -->
					<div class="card-body">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="dosen-1" role="tabpanel" aria-labelledby="v-pills-home-tab">	
								<table id="table-1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Projek</th>
											<th class="text-center">Status</th>
											<th class="text-center">Klaster</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">1</td>
											<td>Internet
											Explorer 5.5
											</td>
											<td class="text-center">
												<span style="box-shadow: var(--shadow-black-300);" class="badge badge-secondary">close</span>
											</td>
											<td>Win 95+</td>
											<td class="text-center">
												<button class="btn btn-sm-2 btn-disabled" type="submit">Apply</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>Internet
											Explorer 5.5
											</td>
											<td class="text-center">
												<span style="box-shadow: var(--shadow-black-300);" class="badge badge-success">open</span>
											</td>
											<td>Win 95+</td>
											<td class="text-center">
												<button class="btn btn-sm-2" type="submit">Apply</button>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Projek</th>
											<th class="text-center">Status</th>
											<th class="text-center">Klaster</th>
											<th class="text-center">Aksi</th>
										</tr>
									</tfoot>
								</table>
							</div>
						
							<div class="tab-pane fade" id="dosen-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">	
								<table id="table-2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Projek</th>
											<th class="text-center">Status</th>
											<th class="text-center">Klaster</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">1</td>
											<td>Internet
											Explorer 5.5
											</td>
											<td class="text-center">
												<span style="box-shadow: var(--shadow-black-300);" class="badge badge-secondary">close</span>
											</td>
											<td>Win 95+</td>
											<td class="text-center">
												<button class="btn btn-sm-2 btn-disabled" type="submit">Apply</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>Internet
											Explorer 5.5
											</td>
											<td class="text-center">
												<span style="box-shadow: var(--shadow-black-300);" class="badge badge-success">open</span>
											</td>
											<td>Win 95+</td>
											<td class="text-center">
												<button class="btn btn-sm-2" type="submit">Apply</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">3</td>
											<td>Internet
											Explorer 5.5
											</td>
											<td class="text-center">
												<span style="box-shadow: var(--shadow-black-300);" class="badge badge-secondary">close</span>
											</td>
											<td>Win 95+</td>
											<td class="text-center">
												<button class="btn btn-sm-2 btn-disabled" type="submit">Apply</button>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Projek</th>
											<th class="text-center">Status</th>
											<th class="text-center">Klaster</th>
											<th class="text-center">Aksi</th>
										</tr>
									</tfoot>
								</table>
							</div>

							<div class="tab-pane fade" id="dosen-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
								<table id="table-3" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Projek</th>
											<th class="text-center">Status</th>
											<th class="text-center">Klaster</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">1</td>
											<td>Internet
											Explorer 5.5
											</td>
											<td>Win 95+</td>
											<td class="text-center">
												<span style="box-shadow: var(--shadow-black-300);" class="badge badge-success">open</span>
											</td>
											<td class="text-center">
												<button class="btn btn-sm-2" type="submit">Apply</button>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Projek</th>
											<th class="text-center">Status</th>
											<th class="text-center">Klaster</th>
											<th class="text-center">Aksi</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<!-- End item projek -->
					</div>
					<!-- End list projek -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Project -->

<!-- Start Produk & Aplikasi -->
<section class="produk section-padding" id="produk" data-scroll-index="4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2>Produk & Aplikasi <span>GARIS V</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 col-lg-3">
				<div class="produk-item">
					<img src="<?= base_url(); ?>assets/dist/img/produk.jpg" alt="produk">
					<h3>Aplikasi 1</h3>
					<span>
						<a href="#">
							Lihat aplikasi 
							<i class="fas fa-arrow-right"></i>
						</a>
					</span>
				</div>
			</div>
			<div class="col-md-7 col-lg-3">
				<div class="produk-item">
					<img src="<?= base_url(); ?>assets/dist/img/produk.jpg" alt="produk">
					<h3>Aplikasi 2</h3>
					<span>
						<a href="#">
							Lihat aplikasi 
							<i class="fas fa-arrow-right"></i>
						</a>
					</span>
				</div>
			</div>
			<div class="col-md-7 col-lg-3">
				<div class="produk-item">
					<img src="<?= base_url(); ?>assets/dist/img/produk.jpg" alt="produk">
					<h3>Aplikasi 3</h3>
					<span>
						<a href="#">
							Lihat aplikasi 
							<i class="fas fa-arrow-right"></i>
						</a>
					</span>
				</div>
			</div>
			<div class="col-md-7 col-lg-3">
				<div class="produk-item">
					<img src="<?= base_url(); ?>assets/dist/img/produk.jpg" alt="produk">
					<h3>Aplikasi 4</h3>
					<span>
						<a href="#">
							Lihat aplikasi 
							<i class="fas fa-arrow-right"></i>
						</a>
					</span>
				</div> 
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="produk-btn">
				<a href="<?= base_url('landingpage/produk'); ?>" class="btn btn-2">Selengkapnya</a>
			</div>
		</div>
	</div>
</section>
<!-- End Produk & Aplikasi -->

<!-- Start Artikel -->
<section class="artikel-0 section-padding" id="kontak" data-scroll-index="5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2>Artikel <span>Terkini</span></h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="populer-card-detail mb-2">
						<div class="meta">
							<div class="photo" style="background-image: url(<?= base_url(); ?>assets/dist/img/artikel.jpg)"></div>
							<ul class="details">
								<li class="author">
									<a href="#">
										<i class="fas fa-user"></i>
										M. Angga Gumilang
									</a>
								</li>
								<li class="date">
									<i class="fas fa-calendar"></i>
									22 Okt 2021
								</li>
								<li class="tags">
									<ul>
										<i class="fas fa-tag"></i>
										<li><a href="#">Hiburan</a></li>
										<li><a href="#">Heboh</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="description">
							<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, cupiditate...</h1>
							<!-- <h2>Opening a door to the future</h2> -->
							<p class="read-more">
								<a class="text-decoration-none" href="pages/det_artikel.html">Baca</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="populer-card-detail mb-2">
						<div class="meta">
							<div class="photo" style="background-image: url(<?= base_url(); ?>assets/dist/img/jurnal.jpg)"></div>
							<ul class="details">
								<li class="author">
									<a href="#">
										<i class="fas fa-user"></i>
										M. Angga Gumilang
									</a>
								</li>
								<li class="date">
									<i class="fas fa-calendar"></i>
									22 Okt 2021
								</li>
								<li class="tags">
									<ul>
										<i class="fas fa-tag"></i>
										<li><a href="#">Hiburan</a></li>
										<li><a href="#">Heboh</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="description">
							<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, cupiditate...</h1>
							<!-- <h2>Opening a door to the future</h2> -->
							<p class="read-more">
								<a class="text-decoration-none" href="#">Baca</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fitur-item">
					<div class="populer-card-detail mb-2">
						<div class="meta">
							<div class="photo" style="background-image: url(<?= base_url(); ?>assets/dist/img/artikel.jpg)"></div>
							<ul class="details">
								<li class="author">
									<a href="#">
										<i class="fas fa-user"></i>
										M. Angga Gumilang
									</a>
								</li>
								<li class="date">
									<i class="fas fa-calendar"></i>
									22 Okt 2021
								</li>
								<li class="tags">
									<ul>
										<i class="fas fa-tag"></i>
										<li><a href="#">Hiburan</a></li>
										<li><a href="#">Heboh</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="description">
							<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, cupiditate...</h1>
							<!-- <h2>Opening a door to the future</h2> -->
							<p class="read-more">
								<a class="text-decoration-none" href="#">Baca</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="produk-btn">
				<a href="<?= base_url('landingpage/artikel'); ?>" class="btn btn-2">Selengkapnya</a>
			</div>
		</div>
	</div>
</section>
<!-- End Artikel -->

<!-- Galeri Foto -->
<section class="galeri section-padding" id="galeri" data-scroll-index="6">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2>Foto Kegiatan <span>GARIS V</span></h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center no-gutters">
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 01.jpg" data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 1">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 01.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 02.jpg"  data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 2">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 02.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 03.jpg"  data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 3">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 03.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 04.jpg" data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 4">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 04.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 05.jpg.jpg" data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 5">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 05.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 06.jpg" data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 6">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 06.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 07.jpg.jpg" data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 7">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 07.jpg" class="art img-fluid" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 08.jpg" data-lightbox="Foto Kegiatan GARIS V" data-title="My caption 8">
					<img src="<?= base_url(); ?>assets/dist/img/galeri/Kegiatan 08.jpg" class="art img-fluid" alt="">
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="produk-btn">
				<a href="#" class="btn btn-2">Selengkapnya</a>
			</div>
		</div>
	</div>
</section>
<!-- End Galeri Foto -->

<!-- Start Faq -->
<section class="faq section-padding" id="faq" data-scroll-index="7">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2>Frequently <span>Asked Questions</span></h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div id="accordion">
					<div class="accordion-item">
						<div class="accordion-header" data-toggle="collapse" data-target="#collapse-01">
							<h3>Bagaimana cara bergabung menjadi member GARIS V ?</h3>
						</div>
						<div class="collapse show" id="collapse-01" data-parent="#accordion">
							<div class="accordion-body">
								<p>
									Tinggal pilih project yang tersedia dan isi form apply
								</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-02">
							<h3>Apakah ada persyaratan khusus untuk bergabung menjadi member GARIS V ?</h3>
						</div>
						<div class="collapse" id="collapse-02" data-parent="#accordion">
							<div class="accordion-body">
								<p>
									Persyaratan khusus tergantung dari masing-masing pemilik project, silahkan hubungi dosen yang bersangkutan!
								</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-03">
							<h3>Bolehkah mahasiswa mengambil lebih dari 1 projek sekaligus?</h3>
						</div>
						<div class="collapse" id="collapse-03" data-parent="#accordion">
							<div class="accordion-body">
								<p>
									Bisa, namun alangkah lebih baik jika mahasiswa hanya tergabung dalam 1 project pada waktu yang bersamaan
								</p>
							</div>
						</div>
						</div>
					<div class="accordion-item">
						<div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-04">
							<h3>Mahasiswa semester berapa yang boleh bergabung GARIS V ?</h3>
						</div>
						<div class="collapse" id="collapse-04" data-parent="#accordion">
							<div class="accordion-body">
								<p>
									Mahasiswa aktif, dari Kampus Utama Polije maupun Kampus PSDKU Polije bisa mendaftar di masing-masing lab yang tersedia di JTI Polije.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Faq -->

<!-- Start Kontak -->
<section class="kontak section-padding" id="kontak" data-scroll-index="8">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title">
					<h2>Kontak <span>Kami</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<div class="kontak-info">
					<h3>
						Jika ada kritik dan saran silahkan hubungi kami melalui kontak berikut:
					</h3>
					<div class="kontak-info-item">
						<i class="fas fa-location-arrow"></i>
						<h4>Lokasi</h4>
						<p>
							Gedung Jurusan Teknologi Informasi, Politeknik Negeri Jember , Lingkungan Panji, Tegalgede,
							Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68124
						</p>
					</div>
					<div class="kontak-info-item">
						<i class="fas fa-envelope"></i>
						<h4>Email</h4>
						<p>
							lab.rsi.jti@polije.ac.id
						</p>
					</div>
					<div class="kontak-info-item">
						<i class="fas fa-phone"></i>
						<h4>Nomor Telepon</h4>
						<p>
							0331-333532
						</p>
					</div>
					<div class="kontak-info-item">
						<i class="fas fa-fax"></i>
						<h4>Fax</h4>
						<p>
							0331-333531
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7">
				<div class="kontak-form">
					<form action="" method="POST">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="name" id="" placeholder="Nama Lengkap" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="email" name="email" id="" placeholder="Email" class="form-control" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="number" name="hp" id="" placeholder="Nomor Handphone" class="form-control" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" name="subjek" id="" placeholder="Subjek" class="form-control" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="pesan" id="" placeholder="Pesan" class="form-control" autocomplete="off"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<button type="submit" class="btn btn-2">Kirim Pesan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- <div class="row"> -->
		<div class="maps-garis">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.447014458154!2d113.7206995141587!3d-8.157636583982516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b68d87fb43%3A0xabe23a31a78289d3!2sJurusan%20Teknologi%20Informasi%2C%20Politeknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1619098235812!5m2!1sid!2sid" 
			width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<!-- </div> -->
	</div>
</section>
<!-- End Kontak -->
