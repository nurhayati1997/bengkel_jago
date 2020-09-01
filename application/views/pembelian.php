<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Pembelian</h2>

				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-sm-12">
				<div class="card card-profile">
					<div class="card-header" style="background-image: url('<?= base_url() ?>assets/img/blogpost.jpg')">
						<div class="profile-picture">
							<div class="avatar avatar-xl">
								<img src="<?= base_url() ?>assets/img/pembelian.png" alt="..." class="avatar-img rounded-circle">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="user-profile text-center">
							<div class="name">Transaksi Pembelian</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambahModal">
								<i class="fa fa-plus"></i>
								Tambah Data
							</button>
						</div>
						<div class="card-footer">
							<div class="table-responsive">
								<table id="tabel_pembelian" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>KODE BARANG</th>
											<th>NAMA BARANG</th>
											<th>JENIS BARANG</th>
											<th>JUMLAH PEMBELIAN</th>
											<th>HARGA KULAK</th>
											<th>AKSI</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
					</div> -->
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Transaksi</span>
					<span class="fw-light">
						Pembelian
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
								<label for="kode">Kode barang</label>
								<input oninput="tampil_data_kode()" onchange="tampil_data_kode()" type="text" class="form-control input-pill" id="kode" autocomplete="TRUE" list="kodes" placeholder="">
								<datalist onchange="tampil_data_kode()" id="kodes">
									<div class="page-inner mt--5">
										<div class="row mt--2">
											<div class="col-sm-12">
												<div class="card card-profile">
													<div class="card-header" style="background-image: url('<?= base_url() ?>assets/img/blogpost.jpg')">
														<div class="profile-picture">
															<div class="avatar avatar-xl">
																<img src="<?= base_url() ?>assets/img/pembelian.png" alt="..." class="avatar-img rounded-circle">
															</div>
														</div>
													</div>
													<div class="card-body">
														<div class="user-profile text-center">
															<div class="name">Transaksi Pembelian</div>
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Tambah Data
															</button>
														</div>
														<div class="card-footer">
															<!-- Modal -->
															<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header no-bd">
																			<h5 class="modal-title">
																				<span class="fw-mediumbold">
																					Transaksi</span>
																				<span class="fw-light">
																					Pembelian
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
																							<label for="pillSelect">Kode barang</label>
																							<select class="form-control input-pill" id="pillSelect" placeholder="Pill Input">
																								<option>001</option>
																								<option>002</option>
																								<option>003</option>
																								<option>004</option>
																								<option>005</option>
																							</select>
																						</div>
																					</div>
																					<div class="col-sm-6">
																						<div class="form-group">
																							<label for="pillInput">Jumlah Pembelian</label>
																							<input type="text" class="form-control input-pill" id="pillInput" placeholder="0">
																						</div>
																					</div>
																					<div class="col-sm-12">
																						<div class="form-group">
																							<label for="pillInput">Nama Barang</label>
																							<input type="text" class="form-control input-pill" id="pillInput" placeholder="barang">
																						</div>
																					</div>
																					<div class="col-sm-6">
																						<div class="form-group">
																							<label for="pillInput">Harga satuan</label>
																							<input type="text" class="form-control input-pill" id="pillInput" placeholder="Rp">
																						</div>
																					</div>
																					<div class="col-sm-6">
																						<div class="form-group">
																							<label for="pillInput">Total</label>
																							<input type="text" class="form-control input-pill" id="pillInput" placeholder="Rp">
																						</div>
																					</div>
																				</div>
																			</form>
																		</div>
																		<div class="modal-footer no-bd">
																			<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
																			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>

								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jumlah">Jumlah Pembelian</label>
								<input oninput="jumlah_barang()" onchange="jumlah_barang()" type="number" min="0" class="form-control input-pill" id="jumlah" placeholder="">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="nama">Nama Barang</label>
								<input type="text" class="form-control input-pill" id="nama" readonly>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="harga">Harga satuan</label>
								<input oninput="jumlah_barang()" onchange="jumlah_barang()" type="text" class="form-control input-pill" id="harga" placeholder="">
							</div>
						</div>
						<div class="col-sm-6" style="display: none;">
							<div class="form-group">
								<label for="total">Total</label>
								<input type="text" class="form-control input-pill" id="total" placeholder="" readonly>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button type="button" onclick="tambah()" class="btn btn-primary">Tambah</button>
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>
<script>
	var barang = [];
	var id_selected = '';
	var stok = 0;
	$(document).ready(function() {
		list();
		ambil_data();
	});

	function list() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>pembelian_control/list',
			dataType: 'json',
			success: function(data) {
				barang = data;
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].kode_barang + '">';
				}
				$("#kodes").html(html);
			}
		});
	}

	function tampil_data_kode() {
		// alert(document.getElementById('kode').value);
		for (var i = 0; i < barang.length; i++) {
			if (document.getElementById('kode').value == barang[i].kode_barang) {
				document.getElementById('nama').value = barang[i].nama_barang;
				document.getElementById('harga').value = barang[i].harga_jual;

				id_selected = barang[i].id_barang;
				stok = barang[i].stok_barang;
				jumlah_barang();
			}
		}
	}

	function jumlah_barang() {
		// alert("yeye");
		if (document.getElementById('jumlah').value != "" && document.getElementById('harga').value != "") {
			document.getElementById('total').value = parseInt(document.getElementById('jumlah').value) * parseInt(document.getElementById('harga').value);
		} else {
			document.getElementById('total').value = "";
		}
	}

	function tambah() {
		if (document.getElementById('jumlah').value == '') {
			document.getElementById('jumlah').focus();
		}
		if (document.getElementById('harga').value == "") {
			document.getElementById('harga').focus();
		}
		if (document.getElementById('kode').value == "") {
			document.getElementById('kode').focus();
		}
		if (document.getElementById('kode').value != "" && document.getElementById('harga').value != "" && document.getElementById('jumlah').value != '') {
			$.ajax({
				type: 'POST',
				url: '<?= base_url() ?>pembelian_control/tambah',
				data: 'id=' + id_selected + '&jumlah=' + document.getElementById('jumlah').value + '&harga=' + document.getElementById('harga').value +
					'&stok=' + stok,
				dataType: 'json',
				success: function(data) {
					document.getElementById('jumlah').value = "";
					document.getElementById('harga').value = "";
					document.getElementById('kode').value = "";
					document.getElementById('nama').value = "";

					$('#tambahModal').modal('hide');
				}
			});
		}
	}

	function ambil_data() {
		$('#tabel_pembelian').DataTable({
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
</script>