<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Karisma Motor</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?= base_url() ?>assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="<?= site_url('dashboard') ?>" class="logo">
					<img src="<?= base_url() ?>assets/img/karisma.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<div class="ml-md-auto py-2 py-md-0">
							<a class="nav-link badge badge-light" href="'<?= base_url() ?>keuntungan/eksportDb" title="Download dan Backup Database" aria-expanded="false">
								Back up Database
							</a>
							<!-- <select class="badge badge-light mr-2" id="backup" onchange="backup()">
								<option value="0">Back Up</option>
								<option value="1">Barang</option>
								<option value="2">Jasa</option>
								<option value="3">Data Base</option>
							</select> -->
						</div>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('penjualan') ?>" title="penjualan" role="button" aria-expanded="false">
								<i class="fas fa-th-list"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" href="<?= site_url('piutang') ?>" title="piutang" aria-expanded="false">
								<i class="fas fa-pen-square"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" href="<?= base_url() ?>assets/help.pdf" target="_blank" title="Bantuan dan Tutorial Aplikasi." aria-expanded="false">
								<i class="fas fa-info"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" href="<?= base_url('login/logout') ?>" title="logout" aria-expanded="false">
								<i class="fa fa-power-off" aria-hidden="true"></i>
							</a>
						</li>
						<!-- <li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url() ?>assets/img/logo_user.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
						</li> -->
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url() ?>assets/img/logo_user.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $this->session->userdata("nama") ?>
									<span class="user-level">
										<?php
										if ($this->session->userdata("rule") == 1) {
											echo "Administrator";
										} else {
											echo "Pegawai/Kasir";
										}
										?>
									</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item <?php if ($this->uri->segment(1) == "dashboard") echo "active" ?>"">
							<a href=" <?= site_url('dashboard') ?>">
							<i class="fas fa-home"></i>
							<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item <?php if ($this->uri->segment(1) == "penjualan") echo "active" ?>"">
							<a href=" <?= site_url('penjualan') ?>">
							<i class="fas fa-th-list"></i>
							<p>Penjualan</p>
							</a>
						</li>
						<li class="nav-item <?php if ($this->uri->segment(1) == "pembelian") echo "active" ?>"">
							<a href=" <?= site_url('pembelian') ?>">
							<i class="fas fa-desktop"></i>
							<p>Pembelian</p>
							</a>
						</li>
						<li class="nav-item <?php if ($this->uri->segment(1) == "barang") echo "active" ?>"">
							<a href=" <?= site_url('barang') ?>">
							<i class="fas fa-layer-group"></i>
							<p>Barang</p>
							</a>
						</li>
						<li class="nav-item <?php if ($this->uri->segment(1) == "jasa") echo "active" ?>"">
							<a href=" <?= site_url('jasa') ?>">
							<i class="fas fa-tachometer-alt"></i>
							<p>Jasa</p>
							</a>
						</li>
						<li class="nav-item <?php if ($this->uri->segment(1) == "piutang") echo "active" ?>">
							<a href="<?= site_url('piutang') ?>">
								<i class="fas fa-pen-square"></i>
								<p>Piutang</p>
							</a>
						</li>
						<?php
						if ($this->session->userdata("rule") == 1) {
						?>
							<li class="nav-item <?php if ($this->uri->segment(1) == "stok" || $this->uri->segment(1) == "keuntungan") echo "active" ?>">
								<a data-toggle="collapse" href="#tables">
									<i class="fas fa-table"></i>
									<p>Laporan</p>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="tables">
									<ul class="nav nav-collapse">
										<li>
											<a href="<?= site_url('keuntungan') ?>">
												<span class="sub-item">Keuntungan</span>
											</a>
										</li>
										<li>
											<a href="<?= site_url('stok') ?>">
												<span class="sub-item">Stok</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						<?php } else { ?>
							<li class="nav-item <?php if ($this->uri->segment(1) == "stok") echo "active" ?>">
								<a href="<?= site_url('stok') ?>">
									<i class="far fa-folder-open"></i>
									<p>Stok Barang</p>
								</a>
							</li>
						<?php } ?>
						<?php
						if ($this->session->userdata("rule") == 1) {
						?>
							<li class="nav-item <?php if ($this->uri->segment(1) == "user" || $this->uri->segment(1) == "client") echo "active" ?>">
								<a data-toggle="collapse" href="#master">
									<i class="fas fa-archive"></i>
									<p>Master Data</p>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="master">
									<ul class="nav nav-collapse">
										<li>
											<a href="<?= site_url('user') ?>">
												<span class="sub-item">User</span>
											</a>
										</li>
										<li>
											<a href="<?= site_url('client') ?>">
												<span class="sub-item">Client</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						<?php } else { ?>
							<li class="nav-item <?php if ($this->uri->segment(1) == "client") echo "active" ?>">
								<a href="<?= site_url('client') ?>">
									<i class="fas fa-user-cog"></i>
									<p>Client</p>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<?php echo $contents ?>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2020, made with <i class="fa fa-heart heart text-danger"></i> FindTech to <a href="">Karisma Motor</a>
					</div>
				</div>
			</footer>
		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->

	<!-- jQuery Sparkline -->
	<script src="<?= base_url() ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url() ?>assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url() ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
	<!-- Bootstrap Notify -->
	<script src="<?= base_url() ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url() ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<!-- Sweet Alert -->
	<script src="<?= base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url() ?>assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->

	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});

		// function backup() {
		// 	var pilihan = $("#backup").val()
		// 	$("#backup").html('<option value="0"><i class="fas fa-spinner fa-pulse"> Memproses..</option>')
		// 	var barang = "vw_penjualan";
		// 	var jasa = "vw_penjualan_jasa";

		// 	var tanggal = new Date();
		// 	var dd = String(tanggal.getDate()).padStart(2, '0');
		// 	var mm = String(tanggal.getMonth() + 1).padStart(2, '0'); //January is 0!
		// 	var yyyy = tanggal.getFullYear();

		// 	tanggal = yyyy + '/' + mm + '/' + dd;
		// 	if (pilihan == 1) {
		// 		window.location.href = '<?= base_url() ?>keuntungan/eksport?target=' + barang + '&tanggalMulai=' + tanggal + '&tanggalSelesai=' + tanggal
		// 	} else if (pilihan == 2) {
		// 		window.location.href = '<?= base_url() ?>keuntungan/eksport?target=' + jasa + '&tanggalMulai=' + tanggal + '&tanggalSelesai=' + tanggal
		// 	} else if (pilihan == 3) {
		// 		window.location.href = '<?= base_url() ?>keuntungan/eksportDb'
		// 	}
		// 	$("#backup").html('<option value="0" selected>Back Up</option><option value="1">Barang</option><option value="2">Jasa</option><option value="3">Data Base</option>')
		// }
	</script>
</body>

</html>