<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Penjualan</h2>
				</div>
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
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-md-3">
				<div class="card-pricing2 card-success">
					<div class="pricing-header">
						<h3 class="fw-bold"> </h3>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency">Penjualan</span>
							<!-- <span class="amount">1<span>99</span></span> -->
							<span class="month">Barang</span>
						</div>
					</div>
					<hr>
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="kode">Kode barang</label>
									<input oninput="tampil_data_kode()" onchange="tampil_data_kode()" type="text" class="form-control input-pill" id="kode" autocomplete="TRUE" list="kodes" placeholder="">
									<datalist onchange="tampil_data_kode()" id="kodes">

									</datalist>
								</div>
<<<<<<< HEAD
<<<<<<< HEAD:application/views/penjualan_view.php
								<div class="price-value">
									<div class="value">
										<span class="currency">Penjualan</span>
										<span class="month">Barang</span>
									</div>
=======
=======
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="jumlah">Jumlah</label>
									<input oninput="jumlah_barang()" onchange="jumlah_barang()" type="number" min="1" class="form-control input-pill" id="jumlah" placeholder="0" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="nama">Nama Barang</label>
									<input type="text" class="form-control input-pill" id="nama" placeholder="" readonly>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="harga">Harga</label>
									<input type="text" class="form-control input-pill" id="harga" placeholder="Rp" readonly>
									<input type="text" class="form-control input-pill" id="harga_kulak" placeholder="Rp" style="display: none;">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="total">Total</label>
									<input type="text" class="form-control input-pill" id="total" placeholder="Rp" readonly>
<<<<<<< HEAD
>>>>>>> origin/inas:application/views/penjualan.php
=======
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
								</div>
							</div>
						</div>
						<a onclick="tambah_array()" class="btn btn-success btn-border btn-lg w-75 fw-bold mb-3">Tambah</a>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card-pricing2 card-primary">
					<div class="pricing-header">
						<h3 class="fw-bold"> </h3>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency">Jasa</span>
							<!-- <span class="amount">1<span>99</span></span> -->
							<span class="month">Service</span>
						</div>
					</div>
					<hr>
					<form>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="kode_jasa">Nama Jasa</label>
									<input oninput="tampil_data_kode_jasa()" onchange="tampil_data_kode_jasa()" type="text" class="form-control input-pill" id="kode_jasa" autocomplete="TRUE" list="kodes_jasa" placeholder="">
									<datalist onchange="tampil_data_kode_jasa()" id="kodes_jasa">

									</datalist>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="harga_jasa">Harga</label>
									<input type="text" class="form-control input-pill" id="harga_jasa" placeholder="Rp" readonly>
								</div>
							</div>
						</div>
						<a onclick="tambah_array_jasa()" class="btn btn-primary btn-border btn-lg w-75 fw-bold mb-3">Tambah</a>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<h4 class="card-title">Data Transaksi</h4>
							<div class="ml-md-auto py-2 py-md-0">
								<a onclick="hutang_cek()" class="btn btn-primary btn-border btn-round mr-2">Hutang</a>
								<a onclick="simpan_penjualan()" id="tambah_button" class="btn btn-secondary btn-round">Simpan</a>
							</div>

						</div>

					</div>
					<div class="card-body">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="nama_client">Nama Client</label>
												<input oninput="tampil_data_kode_klien()" onchange="tampil_data_kode_klien()" type="text" class="form-control input-pill" id="nama_client" list="list_client">
												<datalist oninput="tampil_data_kode_klien()" onchange="tampil_data_kode_klien()" id="list_client">

												</datalist>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="tgl">Tanggal Jatuh Tempo</label>
												<input type="date" class="form-control input-pill" id="tgl">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
<<<<<<< HEAD
<<<<<<< HEAD:application/views/penjualan_view.php
						<div class="col-md-6">
						<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Transaksi</h4>
										<div class="ml-md-auto py-2 py-md-0">
											<a class="btn btn-primary btn-border btn-round mr-2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Hutang</a>
											<a href="#" class="btn btn-success btn-round">Tambah</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="collapse" id="collapseExample">
										<div class="card-body">
											<form>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<label for="pillSelect">Nama Client</label>
															<select class="form-control input-pill" id="pillSelect" placeholder="Pill Input">
																<option>mohammad client</option>
																<option>siti client</option>
																<option>abdul pelanggan</option>
															</select>
														</div>
													</div>
													<div class="ml-md-auto py-2 py-md-0">
														<a href="#" class="btn btn-primary btn-round">Tambah Hutang</a>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Kode</th>
													<th>Nama</th>
													<th>Harga</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th colspan="3">TOTAL</th>
													<th></th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>001</td>
													<td>System Architect</td>
													<td>200.000</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>006</td>
													<td>Accountant</td>
													<td>450.000</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>007</td>
													<td>Junior Technical Author</td>
													<td>067</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>023</td>
													<td>Software Engineer</td>
													<td>54.000</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
=======
=======
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
						<div class="table-responsive">
							<table id="tabel_penjualan" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Jenis</th>
										<th>Nama</th>
										<th>Jumlah </th>
										<th>Harga</th>
										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>TOTAL</th>
<<<<<<< HEAD
										<th colspan="4" id="total_bayar"></th>
=======
										<th colspan="4">
											<form><input type="number" min="0" class="form-control input-pill" id="total_bayar" placeholder="Rp" readonly></form>
										</th>
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
									</tr>
									<tr>
										<th>BAYAR</th>
										<th colspan="4">
											<form><input oninput="kembalian()" onchange="kembalian()" type="number" min="0" class="form-control input-pill" id="bayar" placeholder="Rp"></form>
										</th>
									</tr>
									<tr>
										<th>KEMBALIAN</th>
										<th colspan="4" id="kembalian"></th>
									</tr>
								</tfoot>
								<tbody id="myTabel">

								</tbody>
							</table>
<<<<<<< HEAD
>>>>>>> origin/inas:application/views/penjualan.php
=======
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var barang = [];
	var jasa = [];
	var klien = [];

	var id_selected = '';
	var id_klien = '';
	var transaksi = [];
	var total = 0;
	var hutang = 0;

	var stok = 0;
	$(document).ready(function() {
		list();
		list_jasa();
		list_client();
		ambil_data();
		$('form').on('focus', 'input[type=number]', function(e) {
			$(this).on('wheel.disableScroll', function(e) {
				e.preventDefault()
			})
		});
		$('form').on('blur', 'input[type=number]', function(e) {
			$(this).off('wheel.disableScroll')
		});

		$("#tambah_button").click(function showAlert() {
			$("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#success-alert").slideUp(500);
			});
		});
	});

	function hutang_cek() {
		if (hutang == 0) {
			document.getElementById('collapseExample').style.display = 'block';
			hutang = 1;
		} else {
			document.getElementById('collapseExample').style.display = 'none';
			hutang = 0;
		}
	}

	function simpan_penjualan() {
		if (hutang == 0) {
			jual_biasa();
		} else {
			jual_hutang();
		}
	}

	function jual_hutang() {
		if (document.getElementById('tgl').value == "") {
			document.getElementById('tgl').focus();
		}
		if (document.getElementById('nama_client').value == "") {
			document.getElementById('nama_client').focus();
		}
		if (document.getElementById('nama_client').value != "" && document.getElementById('tgl').value != "") {
			$.ajax({
				type: 'POST',
				url: '<?= base_url() ?>penjualan/transaksi',
				data: 'transaksi=' + transaksi,
				dataType: 'json',
				success: function(data) {
					// console.log(data);
					looping(data);
					piutang(data);
				}
			});
		}
	}

	function piutang(id) {
		// console.log(transaksi);
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>penjualan/jual_hutang',
			data: 'id=' + id + '&tgl=' + document.getElementById('tgl').value + '&client=' + id_klien,
			dataType: 'json',
			success: function(data) {
				transaksi = [];
				hutang_cek();
				document.getElementById('nama_client').value = ""
				document.getElementById('tgl').value = "";

				document.getElementById('total_bayar').value = "";
				document.getElementById('bayar').value = "";
				total = 0;
				ambil_data();
			}
		});
	}

	function jual_biasa() {
		// console.log(transaksi);
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>penjualan/transaksi',
			data: 'transaksi=' + transaksi,
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				looping(data);
				transaksi = [];
				document.getElementById('total_bayar').value = "";
				document.getElementById('bayar').value = "";
				total = 0;
				ambil_data();
			}
		});
	}

	function looping(id) {
		for (var i = 0; i < transaksi.length; i++) {
			if (transaksi[i].tipe == 0) {
				$.ajax({
					type: 'POST',
					url: '<?= base_url() ?>penjualan/barang_insert',
					data: 'id_transaksi=' + id + '&id_barang=' + transaksi[i].id +
						'&jumlah=' + transaksi[i].jumlah + '&harga=' + transaksi[i].harga +
						'&harga_kulak=' + transaksi[i].harga_kulak + '&stok=' + transaksi[i].stok,
					dataType: 'json',
					success: function(data) {

					}
				});
			} else {
				$.ajax({
					type: 'POST',
					url: '<?= base_url() ?>penjualan/jasa_insert',
					data: 'id_transaksi=' + id + '&id_jasa=' + transaksi[i].id,
					dataType: 'json',
					success: function(data) {

					}
				});
			}
		}
	}

	function list() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>pembelian/lista',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				barang = data;
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].kode_barang + '">';
				}
				$("#kodes").html(html);
			}
		});
	}

	function list_client() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>penjualan/list_client',
			dataType: 'json',
			success: function(data) {
				klien = data;
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].nama_client + '">';
				}
				$("#list_client").html(html);
			}
		});
	}

	function ambil_data() {
		var html = '';
		for (var i = 0; i < transaksi.length; i++) {
			var temp = parseInt(transaksi[i].jumlah) * parseInt(transaksi[i].harga);
			total += temp;
			// console.log(transaksi[i].tipe);
			if (transaksi[i].tipe == 1) {
				var tipe = "Jasa";
			} else {
				var tipe = "Barang";
			}
			html += '<tr>' +
				'<td>' + tipe + '</td>' +
				'<td>' + transaksi[i].nama + '</td>' +
				'<td>' + transaksi[i].jumlah + '</td>' +
				'<td>' + transaksi[i].harga + '</td>' +
				'<td>' +
				'<div class="form-button-action">' +
				'<button onclick="hapus_list(' + transaksi[i].no + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">' +
				'<i class="fa fa-times"></i>' +
				'</button>' +
				'</div>' +
				'</td>' +
				'</tr>';
		}
		$("#myTabel").html(html);
		document.getElementById('total_bayar').value = total;
		$("#tabel_penjualan").dataTable().fnDestroy();
	}

	function kembalian() {
		if (transaksi.length > 0) {
			var kembalian = parseInt(document.getElementById('bayar').value) - total;
			$("#kembalian").html(kembalian);
		}
	}

	function hapus_list(id) {
		transaksi.splice(id, 1);
		ambil_data();
	}

	function tampil_data_kode() {
		console.log(barang);
		// alert(document.getElementById('kode').value);
		for (var i = 0; i < barang.length; i++) {
			if (document.getElementById('kode').value == barang[i].kode_barang) {
				document.getElementById('nama').value = barang[i].nama_barang;
				document.getElementById('harga').value = barang[i].harga_jual;
				document.getElementById('harga_kulak').value = barang[i].harga_kulak;

				id_selected = barang[i].id_barang;
				stok = barang[i].stok_barang;
				jumlah_barang();
			}
		}
	}

	function tampil_data_kode_klien() {
		// alert(document.getElementById('kode').value);
		for (var i = 0; i < klien.length; i++) {
			if (document.getElementById('nama_client').value == klien[i].nama_client) {
				id_klien = klien[i].id_client;
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

	function list_jasa() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>penjualan/lista',
			dataType: 'json',
			success: function(data) {
				jasa = data;
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].nama_jasa + '">';
				}
				$("#kodes_jasa").html(html);
			}
		});
	}

	function tampil_data_kode_jasa() {
		// alert(document.getElementById('kode').value);
		for (var i = 0; i < jasa.length; i++) {
			if (document.getElementById('kode_jasa').value == jasa[i].nama_jasa) {
				document.getElementById('harga_jasa').value = jasa[i].harga_jasa;

				id_selected = jasa[i].id_jasa;
			}
		}
	}

	function tambah_array() {
		if (document.getElementById('kode').value == "") {
			document.getElementById('kode').focus();
		}
		if (document.getElementById('jumlah').value == "") {
			document.getElementById('jumlah').focus();
		}
		if (document.getElementById('kode').value != "" && document.getElementById('jumlah').value != "") {

			var data = {
				"no": transaksi.length,
				"tipe": 0,
				"id": id_selected,
				"nama": document.getElementById('nama').value,
				"jumlah": document.getElementById('jumlah').value,
				"harga": document.getElementById('harga').value,
				"stok": stok
			};

			document.getElementById('kode').value = "";
			document.getElementById('nama').value = "";
			document.getElementById('harga').value = "";
			document.getElementById('jumlah').value = "";
			document.getElementById('total').value = "";

			transaksi[transaksi.length] = data;
			ambil_data();
			// console.log(transaksi);
		}


	}

	function tambah_array_jasa() {
		if (document.getElementById('kode_jasa').value == "") {
			document.getElementById('kode_jasa').focus();
		} else {

			var data = {
				"no": transaksi.length,
				"tipe": 1,
				"id": id_selected,
				"nama": document.getElementById('kode_jasa').value,
				"jumlah": "1",
				"harga": document.getElementById('harga_jasa').value,
				"harga_kulak": document.getElementById('harga_jasa').value,
				"stok": 0
			};

			document.getElementById('kode_jasa').value = "";
			document.getElementById('harga_jasa').value = "";

			transaksi[transaksi.length] = data;
			ambil_data();
			// console.log(transaksi);
		}


	}
</script>