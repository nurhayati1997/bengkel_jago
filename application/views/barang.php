<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Barang</h2>

				</div>
				<!-- <div class="ml-md-auto py-2 py-md-0">
					<a href="#" class="btn btn-white btn-border btn-round mr-2">+ Penjualan</a>
					<a href="#" class="btn btn-secondary btn-round">Piutang</a>
				</div> -->
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-sm-12">
				<div class="card card-profile">
					<div class="card-header" style="background-image: url('<?= base_url() ?>assets/img/examples/example3.jpeg')">
						<div class="profile-picture">
							<div class="avatar avatar-xl">
								<img src="<?= base_url() ?>assets/img/barang.png" alt="..." class="avatar-img rounded-circle">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="user-profile text-center">
							<div class="name">Gudang Barang</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Tambah Data
							</button>
						</div>
						<div class="card-footer">

							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
								<strong>Data Berhasil di Tambah</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="edit-alert" role="alert">
								<strong>Data Berhasil di Ubah</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="delete-alert" role="alert">
								<strong>Data Berhasil di Hapus</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="table-responsive">
								<table id="myTable" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>KODE BARANG</th>
											<th>JENIS BARANG</th>
											<th>NAMA BARANG</th>
											<th>STOK</th>
											<th>DISTRIBUTOR</th>
											<th>HARGA KULAK</th>
											<th>HARGA JUAL</th>
											<th style="width: 10%">AKSI</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Tambah Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Data Master</span>
					<span class="fw-light">
						Barang
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="kode">Kode Barang</label>
								<input type="text" class="form-control input-pill" id="kode" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jenis">Jenis Barang</label>
								<select class="form-control input-pill" id="jenis" placeholder="">
									<option value="0">Sepeda Motor</option>
									<option value="1">Mobil</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="nama">Nama Barang</label>
								<input type="text" class="form-control input-pill" id="nama" placeholder="barang">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="merk">Merk</label>
								<input type="text" class="form-control input-pill" id="merk" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="distributor">Distributor</label>
								<input type="text" class="form-control input-pill" id="distributor" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="satuan">Harga Satuan</label>
								<input type="number" min="0" class="form-control input-pill" id="satuan" placeholder="Rp">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jual">Harga jual</label>
								<input type="number" min="0" class="form-control input-pill" id="jual" placeholder="Rp">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button onclick="tambah()" id="tambah_button" type="button" data-dismiss="modal" class="btn btn-primary">Tambah</button>
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<!--Ubah Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Data Master</span>
					<span class="fw-light">
						Barang
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_kode">Kode Barang</label>
								<input type="text" class="form-control input-pill" id="ubah_kode" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jenis">Jenis Barang</label>
								<select class="form-control input-pill" id="ubah_jenis" placeholder="">
									<option value="0">Sepeda Motor</option>
									<option value="1">Mobil</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="ubah_nama">Nama Barang</label>
								<input type="text" class="form-control input-pill" id="ubah_nama" placeholder="barang">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_merk">Merk</label>
								<input type="text" class="form-control input-pill" id="ubah_merk" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_stok">Stok</label>
								<input type="number" min="0" class="form-control input-pill" id="ubah_stok" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_satuan">Harga Satuan</label>
								<input type="number" min="0" class="form-control input-pill" id="ubah_satuan" placeholder="Rp">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jual">Harga jual</label>
								<input type="number" min="0" class="form-control input-pill" id="ubah_jual" placeholder="Rp">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_distributor">Distributor</label>
								<input type="text" class="form-control input-pill" id="ubah_distributor" placeholder="">
							</div>
						</div>

					</div>
				</form>
			</div>
			<div class="modal-footer no-bd" id="ubahModal_tombol">
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<!--Hapus Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data Master</span>
					<span class="fw-light">
						Barang
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda ingin mengapus data ? </br> <span style="color: red;">*Data yang telah dihapus tidak dapat dikembalikan lagi</span></p>
			</div>
			<div class="modal-footer no-bd" id="hapusModal_tombol">
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		// $("#success-alert").hide();
		$("#tambah_button").click(function showAlert() {
			$("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#success-alert").slideUp(500);
			});
		});

		$("#ubah_button").click(function showAlert() {
			$("#edit-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#edit-alert").slideUp(500);
			});
		});

		$("#hapus_button").click(function showAlert() {
			$("#delete-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#delete-alert").slideUp(500);
			});
		});

		//datatabel
		ambil_data();
	});

	function tambah() {
		if (document.getElementById("jual").value == "") {
			document.getElementById("jual").focus();
		}
		if (document.getElementById("satuan").value == "") {
			document.getElementById("satuan").focus();
		}
		if (document.getElementById("merk").value == "") {
			document.getElementById("merk").focus();
		}
		if (document.getElementById("distributor").value == "") {
			document.getElementById("distributor").focus();
		}
		if (document.getElementById("nama").value == "") {
			document.getElementById("nama").focus();
		}
		if (document.getElementById("jenis").value == "") {
			document.getElementById("jenis").focus();
		}
		if (document.getElementById("kode").value == "") {
			document.getElementById("kode").focus();
		} else {
			// console.log("sukses");
			$.ajax({
				type: 'POST',
				data: 'tabel="tbl_barang"' + '&kode=' + document.getElementById("kode").value +
					'&jenis=' + document.getElementById("jenis").value + '&nama=' + document.getElementById("nama").value +
					'&distributor=' + document.getElementById("distributor").value + '&satuan=' + document.getElementById("satuan").value +
					'&jual=' + document.getElementById("jual").value + '&merk=' + document.getElementById("merk").value,
				url: '<?= base_url() ?>barang_control/tambah',
				dataType: 'json',
				success: function(data) {
					document.getElementById("kode").value = "";
					document.getElementById("nama").value = "";
					document.getElementById("jenis").value = "";
					document.getElementById("merk").value = "";
					document.getElementById("distributor").value = "";
					document.getElementById("satuan").value = "";
					document.getElementById("jual").value = "";

					ambil_data();
				}
			});
		}
		// console.log(document.getElementById("kode").value);
	}

	function ambil_data() {
		$('#myTable').DataTable({
			destroy: true,
			"ajax": {
				"url": "<?php echo site_url("barang_control/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "kode_barang"
				},
				{
					"data": "jenis",
					"render": function(data, type, row) {
						if (data == 0) {
							return "Sepeda Motor"
						} else {
							return "Mobil"
						}

					}
				},
				{
					"data": "nama_barang"
				},
				{
					"data": "stok_barang"
				},
				{
					"data": "distributor"
				},
				{
					"data": "harga_kulak"
				},
				{
					"data": "harga_jual"
				},
				{
					"data": "id_barang",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						var html = '<div class="form-button-action">' +
							'<button onclick="ubah_list(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">' +
							'<i class="fa fa-edit"></i>' +
							'</button>' +
							'<button onclick="hapus_list(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">' +
							'<i class="fa fa-times"></i>' +
							'</button>' +
							'</div>';
						return html
					}

				}
			]
		});
	}

	function ubah_list(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>barang_control/ubah_list',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				for (var i = 0; i < data.length; i++) {
					document.getElementById("ubah_kode").value = data[i].kode_barang;
					document.getElementById("ubah_nama").value = data[i].nama_barang;
					document.getElementById("ubah_jenis").value = data[i].jenis;
					document.getElementById("ubah_merk").value = data[i].merk_barang;
					document.getElementById("ubah_distributor").value = data[i].distributor;
					document.getElementById("ubah_satuan").value = data[i].harga_kulak;
					document.getElementById("ubah_jual").value = data[i].harga_jual;
					document.getElementById("ubah_stok").value = data[i].stok_barang;
					var html = '<button onclick="ubah(' + id + ')" id="ubah_button" type="button" data-dismiss="modal" class="btn btn-primary">Ubah</button>';
					$("#ubahModal_tombol").html(html);

					$('#ubahModal').modal('show');
				}
			}
		});
	}

	function ubah(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id + '&kode=' + document.getElementById("ubah_kode").value +
				'&jenis=' + document.getElementById("ubah_jenis").value + '&nama=' + document.getElementById("ubah_nama").value +
				'&distributor=' + document.getElementById("ubah_distributor").value + '&satuan=' + document.getElementById("ubah_satuan").value +
				'&jual=' + document.getElementById("ubah_jual").value + '&merk=' + document.getElementById("ubah_merk").value +
				'&stok=' + document.getElementById("ubah_stok").value,
			url: '<?= base_url() ?>barang_control/ubah',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#ubahModal').modal('hide');
				ambil_data();
			}
		});
	}

	function hapus_list(id) {
		var html = '<button onclick="hapus(' + id + ')" id="hapus_button" type="button" data-dismiss="modal" class="btn btn-danger">Hapus</button>';
		$("#hapusModal_tombol").html(html);
		$('#hapusModal').modal('show');
	}

	function hapus(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>barang_control/hapus',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#hapusModal').modal('hide');
				ambil_data();
			}
		});
	}
</script>