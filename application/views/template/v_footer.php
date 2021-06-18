<!-- Start Footer -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-col">
					<h3>GARIS V Kecerdasan Buatan</h3>
					<ul>
						<li><a href="pages/tentang.html"> Tentang</a></li>
						<li><a href="#" data-scroll-goto="7"> Faq</a></li>
						<li><a href="#"> Join Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-col">
					<div class="footer-col">
						<h3>Menu Utama</h3>
						<div class="row">
							<div class="col-lg-4">
								<ul>
									<li><a href="index.html">Beranda</a></li>
									<li><a href="#" data-scroll-goto="1">VLMS</a></li>
									<li><a href="#" data-scroll-goto="3">Projek</a></li>
									<li><a href="#" data-scroll-goto="7">Kontak</a></li>
								</ul>
							</div>
							<div class="col-lg-8">
								<ul>
									<li><a href="pages/eresources.html">E-Resources</a></li>
									<li><a href="#">Produk & Aplikasi</a></li>
									<li><a href="pages/artikel.html">Artikel</a></li>
									<li><a href="#">Foto Kegiatan</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-col">
					<h3>Privasi dan Policy</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid adipisci.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-col">
					<h3>Sosial Media</h3>
					<ul>
						<li><a href="https://www.facebook.com/jtipolije" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a></li>
						<li><a href="https://www.youtube.com/channel/UCyjE1iZi_oXfVqJFzlM-WAQ" target="_blank"><i class="fab fa-youtube-square"></i> Youtube</a></li>
						<li><a href="#"><i class="fab fa-whatsapp-square" target="_blank"></i> WhatsApp</a></li>
						<li><a href="https://www.instagram.com/jtipolije/" target="_blank"><i class="fab fa-instagram-square"></i> Istagram</a></li>
						<li><a href="jti1@polije.ac.id" target="_blank"><i class="fas fa-envelope-square"></i> Email</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="copyright-text">&copy; 2021 Grup Riset dan Keahlian V Kecerdasan Buatan JTI - Politeknik Negeri Jember
				<p>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer -->

<!-- Start Scroll to top -->
<div class='ignielToTop' />
<!-- End Scroll to top -->

<!-- jquery js -->
<script src="<?= base_url(); ?>assets/dist/js/jquery.min.js"></script>
<!-- popper js -->
<script src="<?= base_url(); ?>assets/dist/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?= base_url(); ?>assets/dist/js/bootstrap.min.js"></script>
<!-- owl carousel js -->
<script src="<?= base_url(); ?>assets/dist/js/owl.carousel.min.js"></script>
<!-- ScrollIt js -->
<script src="<?= base_url(); ?>assets/dist/js/scrollIt.min.js"></script>
<!-- main js -->
<script src="<?= base_url(); ?>assets/dist/js/main.js"></script>
<!-- Lightbox popup js -->
<!-- <script src="js/lightbox-plus-jquery.js"></script> -->
<!-- Sweetalert 2 -->
<script src="<?= base_url(); ?>assets/dist/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
	function join() {
		const swalBtnBootstrap = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-2'
			},
			buttonsStyling: false
		}); 

		swalBtnBootstrap.fire({
			title: 'Join With Us!',
			text: 'Bergabung bersama kami, dengan cara apply project dari beberapa dosen',
			icon: 'info',
			// showConfirmButton: false,
			showCloseButton: true,
			confirmButtonText: 'JOIN SEKARANG!'	
		});
	}
</script>

<!-- DataTables -->
<script src="<?= base_url(); ?>assets/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
	$(function() {
		$("#table-1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});

		$("#table-2").DataTable({
			"responsive": true,
			"autoWidth": false,
		});

		$("#table-3").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
	});
</script>

<!-- Scroll to top javascript -->
<script>
	$(document).scroll(function() {
		return $(document).scrollTop() > 300 ? $('.ignielToTop').addClass('show') : $('.ignielToTop').removeClass('show')
	}), $('.ignielToTop').click(function() {
		return $('html,body').animate({
			scrollTop: '0'
		});
	});
</script>
<!-- Scroll to top javascript -->

<!-- GetButton.io widget -->
<script type="text/javascript">
	(function() {
		var options = {
			whatsapp: "+628978333856", // WhatsApp number
			email: "lab.rsi.jti@polije.ac.id", // Email
			call_to_action: "Ada pertanyaan ?", // Call to action
			button_color: "#467FCF", // Color of button
			position: "right", // Position may be 'right' or 'left'
			order: "whatsapp,email", // Order of buttons
		};
		var proto = document.location.protocol,
			host = "getbutton.io",
			url = proto + "//static." + host;
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = url + '/widget-send-button/js/init.js';
		s.onload = function() {
			WhWidgetSendButton.init(host, proto, options);
		};
		var x = document.getElementsByTagName('script')[0];
		x.parentNode.insertBefore(s, x);
	})();
</script>
<!-- /GetButton.io widget -->

</body>

</html>