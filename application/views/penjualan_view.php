<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<!-- <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
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
			</div> -->
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-md-4">

				<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
					<div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
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
											<label for="kode">Id barang</label>
											<div id="errorBarang"></div>
											<input oninput="tampil_data_kode()" onchange="tampil_data_kode()" type="text" class="form-control input-pill" id="kode" autocomplete="TRUE" list="kodes" placeholder="">
											<datalist onchange="tampil_data_kode()" id="kodes">

											</datalist>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="jumlah">Jumlah</label>
											<input oninput="jumlah_barang()" onchange="jumlah_barang()" type="number" min="1" class="form-control input-pill" id="jumlah" placeholder="0" required>
										</div>
									</div>
									<div class="col-sm-12">
										<a onclick="tambah_array()" id="tambahBarang" class="btn btn-success btn-border btn-lg w-75 fw-bold mb-3">Tambah</a>
										<div class="form-group">
											<label for="nama">Nama Barang</label>
											<input type="text" class="form-control input-pill" id="nama" placeholder="" readonly>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="keterangan">Keterangan</label>
											<textarea type="text" class="form-control input-pill" id="keterangan" readonly> </textarea>
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
										</div>
									</div>
								</div>
							</form>
						</div>

					</div>
					<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">

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
											<div id="errorJasa"></div>
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
								<a onclick="tambah_array_jasa()" id="tambahJasa" class="btn btn-primary btn-border btn-lg w-75 fw-bold mb-3">Tambah</a>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<ul class="nav nav-pills nav-danger" id="pills-tab-with-icon" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
										Barang
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
										Jasa
									</a>
								</li>
							</ul>
							&nbsp;&nbsp;
							<h4 class="card-title">Data Transaksi</h4>
							&nbsp;&nbsp;
							<div class="ml-md-auto py-2 py-md-0">
								<a onclick="hutang_cek()" class="btn btn-info btn-round mr-2"><b>Hutang</b></a>
								<a onclick="simpan_penjualan()" id="tambah_button" class="btn btn-warning btn-round"><b>Simpan</b></a>
							</div>
						</div>
						<div id="errorSimpan"></div>
					</div>
					<div class="card-body">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="nama_client">Nama Client</label>
												<div id="errorKlien"></div>
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

						<div class="table-responsive">
							<table id="tabel_penjualan" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Jenis</th>
										<th>Nama</th>
										<th>Keterangan</th>
										<th>Jumlah </th>
										<th>Harga</th>
										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>TOTAL</th>
										<!-- <th colspan="4" id="total_bayar"></th> -->
										<th colspan="4">
											<form><input type="text" min="0" class="form-control input-pill" id="total_bayar" placeholder="Rp" readonly /></form>
										</th>
									</tr>
									<tr>
										<th>BAYAR</th>
										<th colspan="4">
											<form><input oninput="kembalian()" onchange="kembalian()" type="number" min="0" class="form-control input-pill" id="bayar" placeholder="Rp" /></form>
										</th>
									</tr>
									<tr>
										<th>KEMBALI</th>
										<th colspan="4" id="kembalian"> 0</th>
									</tr>
								</tfoot>
								<tbody id="myTabel">

								</tbody>
							</table>
						</div>
					</div>

					<div class="table-responsive center">
						<h4 class="card-title text-center bg-info p-2">Daftar Transaksi Terakhir</h4>
						<table id="tabelTransaksiTerakhir" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Keterangan</th>
									<th>Harga</th>
									<th>Jumlah </th>
									<th>Total</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody id="transaksiTerakhir">

							</tbody>
						</table>
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
	var id_selected_jasa = '';
	var id_klien = '';
	var transaksi = [];
	var total = 0;
	var hutang = 0;
	var barangKosong = true;
	var jasaKosong = true;
	var klienKosong = true;

	var stok = 0;
	$(document).ready(function() {
		list();
		list_jasa();
		list_client();
		ambil_data();
		getTransaksiTerakhir();
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
		$("#tambah_button").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		if (hutang == 0) {
			jual_biasa();
		} else {
			jual_hutang();
		}
		$("#tambah_button").html('Simpan')
		total = 0
	}

	function jual_hutang() {
		if (transaksi.length < 1) {
			$("#errorSimpan").html("<small class='text-danger'>Catatan pembelian kosong.</small>")
		} else if (klienKosong) {
			$("#errorSimpan").html("<small class='text-danger'>klien tidak ditemukan.</small>")
		} else {
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

						$("#errorSimpan").html("")
					}
				});
			}
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
				getTransaksiTerakhir();
			}
		});
	}

	function jual_biasa() {
		//console.log(transaksi);
		if (transaksi.length < 1) {
			$("#errorSimpan").html("<small class='text-danger'>Catatan pembelian kosong.</small>")
		} else {
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
					getTransaksiTerakhir();
					$("#errorSimpan").html("")
				}
			});
		}
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
						// console.log(data)
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
				//console.log(data);
				barang = data;
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].id_barang + '">' + data[i].nama_barang + ' | ' + data[i].jenis + ' | ' + data[i].merk_barang + ' | ' + data[i].keterangan + ' | ' + data[i].kode_barang + '</option>';
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
		total = 0
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
				'<td>' + transaksi[i].keterangan + '</td>' +
				'<td>' + transaksi[i].jumlah + '</td>' +
				'<td>' + formatRupiah(transaksi[i].harga.toString()) + '</td>' +
				'<td>' +
				'<div class="form-button-action">' +
				'<button onclick="hapus_list(' + i + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">' +
				'<i class="fa fa-times"></i>' +
				'</button>' +
				'</div>' +
				'</td>' +
				'</tr>';
		}
		$("#myTabel").html(html);
		document.getElementById('total_bayar').value = formatRupiah(total.toString());
		$("#tabel_penjualan").dataTable().fnDestroy();
	}

	function kembalian() {
		if (transaksi.length > 0) {
			var penampung = formatRupiah((parseInt(document.getElementById('bayar').value) - total).toString());
			if (parseInt(document.getElementById('bayar').value) - total < 0) {
				$("#kembalian").html('- ' + penampung);
			} else {
				$("#kembalian").html(penampung);
			}
		}
	}

	function hapus_list(id) {
		transaksi.splice(id, 1);
		ambil_data();
	}

	function tampil_data_kode() {
		//console.log(barang);
		// alert(document.getElementById('kode').value);
		$("#errorBarang").html("")
		barangKosong = true;
		for (var i = 0; i < barang.length; i++) {
			if (document.getElementById('kode').value == barang[i].id_barang) {
				document.getElementById('nama').value = barang[i].nama_barang;
				document.getElementById('keterangan').value = barang[i].jenis + ' | ' + barang[i].merk_barang + ' | ' + barang[i].keterangan + ' | ' + barang[i].kode_barang;
				document.getElementById('harga').value = formatRupiah(barang[i].harga_jual.toString());
				document.getElementById('harga_kulak').value = barang[i].harga_kulak;

				id_selected = barang[i].id_barang;
				stok = barang[i].stok_barang;
				jumlah_barang();
				barangKosong = false
				break;
			}
		}

		if (barangKosong) {
			$("#errorBarang").html("<small class='text-danger'>id tidak ditemukan.</small>")
			document.getElementById('jumlah').value = "";
			document.getElementById('nama').value = "";
			document.getElementById('keterangan').value = "";
			document.getElementById('harga').value = "";
			document.getElementById('total').value = "";
		}
	}

	function tampil_data_kode_klien() {
		$("#errorKlien").html("")
		klienKosong = true;
		// alert(document.getElementById('kode').value);
		for (var i = 0; i < klien.length; i++) {
			if (document.getElementById('nama_client').value == klien[i].nama_client) {
				id_klien = klien[i].id_client;
				klienKosong = false
			}
		}
		if (klienKosong) {
			$("#errorKlien").html("<small class='text-danger'>Klien tidak ditemukan.</small>")
			document.getElementById('tgl').value = "";
		}
	}

	function jumlah_barang() {
		// alert("yeye");
		if (document.getElementById('jumlah').value != "" && document.getElementById('harga').value != "") {
			document.getElementById('total').value = parseInt(document.getElementById('jumlah').value) * parseInt(document.getElementById('harga').value.replace(/\./g, ''));
			document.getElementById('total').value = formatRupiah(document.getElementById('total').value.toString());
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
		$("#errorJasa").html("")
		jasaKosong = true;
		for (var i = 0; i < jasa.length; i++) {
			if (document.getElementById('kode_jasa').value == jasa[i].nama_jasa) {
				document.getElementById('harga_jasa').value = formatRupiah(jasa[i].harga_jasa.toString());

				id_selected_jasa = jasa[i].id_jasa;
				jasaKosong = false;
				break;
			}
		}

		if (jasaKosong) {
			$("#errorJasa").html("<small class='text-danger'>Jasa tidak ditemukan.</small>")
			$("#harga_jasa").val("")
		}
	}

	function tambah_array() {
		$("#tambahBarang").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		if (barangKosong) {
			$("#errorBarang").html("<small class='text-danger'>id tidak ditemukan.</small>")
		} else {
			if (document.getElementById('kode').value == "") {
				document.getElementById('kode').focus();
			}
			if (document.getElementById('jumlah').value == "") {
				document.getElementById('jumlah').focus();
			}
			if (document.getElementById('kode').value != "" && document.getElementById('jumlah').value != "") {
				var data = {
					"tipe": 0,
					"id": id_selected,
					"nama": document.getElementById('nama').value,
					"keterangan": document.getElementById('keterangan').value,
					"jumlah": document.getElementById('jumlah').value,
					"harga": parseInt(document.getElementById('harga').value.replace(/\./g, '')),
					"harga_kulak": document.getElementById('harga_kulak').value,
					"stok": stok
				};
				document.getElementById('kode').value = "";
				document.getElementById('nama').value = "";
				document.getElementById('keterangan').value = "";
				document.getElementById('harga').value = "";
				document.getElementById('jumlah').value = "";
				document.getElementById('total').value = "";

				transaksi[transaksi.length] = data;
				ambil_data();
				console.log(transaksi);
			}
		}

		$("#tambahBarang").html('Tambah')
	}

	function tambah_array_jasa() {
		$("#tambahJasa").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		if (jasaKosong) {
			$("#errorJasa").html("<small class='text-danger'>Jasa tidak ditemukan.</small>")
		} else {
			if (document.getElementById('kode_jasa').value == "") {
				document.getElementById('kode_jasa').focus();
			} else {

				var data = {
					"tipe": 1,
					"id": id_selected_jasa,
					"nama": document.getElementById('kode_jasa').value,
					"keterangan": "-",
					"jumlah": "1",
					"harga": parseInt(document.getElementById('harga_jasa').value.replace(/\./g, '')),
					"harga_kulak": 0,
					"stok": 0
				};

				document.getElementById('kode_jasa').value = "";
				document.getElementById('harga_jasa').value = "";

				transaksi[transaksi.length] = data;
				ambil_data();
				// console.log(transaksi);
			}
		}
		$("#tambahJasa").html('Tambah')
	}

	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}

	function getTransaksiTerakhir() {
		$("#tombolProses").html('<i class="fas fa-spinner fa-pulse"></i> Memproses...')
		$.ajax({
			url: '<?= base_url() ?>penjualan/getTransaksiTerakhir',
			method: 'post',
			data: "target=tbl_penjualan&tanggalMulai=" + tanggalHariIni() + "&tanggalSelesai=" + tanggalHariIni(),
			dataType: 'json',
			success: function(data) {
				//console.log(data)
				var idData = [];
				var bestFive = [];
				var terbesar = '';
				var pembanding = '';
				for (let i = 0; i < data[0].length; i++) {
					idData.push([data[0][i].id_penjualan, data[0][i].tgl_transaksi, 0]);
				}
				for (let i = 0; i < data[1].length; i++) {
					idData.push([data[1][i].id_penjualan_jasa, data[1][i].tgl_transaksi, 1]);
				}

				//console.log(idData[0][1])

				//sort data
				while (bestFive.length < 5 && idData.length > 0) {
					terbesar = [0, new Date(idData[0][1])];
					for (let i = 0; i < idData.length; i++) {
						pembanding = new Date(idData[i][1])
						if (terbesar[1] < pembanding) {
							terbesar = [i, new Date(idData[i][1])];
						}
					}
					bestFive.push(idData[terbesar[0]])
					idData.splice(terbesar[0], 1)
				}

				//tinggal stop kalo data kurang dari 5
				// for (let i = 0; i < bestFive.length; i++) {
				// 	console.log(bestFive[i])
				// }

				var tabel = ''
				for (let i = 0; i < bestFive.length; i++) {
					//console.log(i)
					if (bestFive[i][2] == 0) {
						for (let j = 0; j < data[0].length; j++) {
							if (bestFive[i][0] == data[0][j].id_penjualan) {
								tabel += '<tr>'
								tabel += '<td>' + data[0][j].nama_barang + '</td>'
								tabel += '<td>' + data[0][j].jenis + ' | ' + data[0][j].merk_barang + ' | ' + data[0][j].keterangan + ' | ' + data[0][j].kode_barang + '</td>'
								tabel += '<td>' + formatRupiah(data[0][j].harga_jual) + '</td>'
								tabel += '<td>' + data[0][j].jumlah_penjualan + '</td>'
								tabel += '<td>' + formatRupiah((data[0][j].harga_jual * data[0][j].jumlah_penjualan).toString()) + '</td>'
								if (data[0][j].status_piutang == 0) {
									statusHutang = "Hutang"
								} else if (data[0][j].status_piutang == 1) {
									statusHutang = "Lunas"
								} else {
									statusHutang = "Cash"
								}
								tabel += '<td>' + statusHutang + '</td>'
								tabel += '</tr>'
							}
						}
					} else {
						for (let k = 0; k < data[1].length; k++) {
							if (bestFive[i][0] == data[1][k].id_penjualan_jasa) {
								tabel += '<tr>'
								tabel += '<td>' + data[1][k].nama_jasa + '</td>'
								tabel += '<td>-</td>'
								tabel += '<td>' + formatRupiah(data[1][k].harga_jasa) + '</td>'
								tabel += '<td>1</td>'
								tabel += '<td>' + formatRupiah(data[1][k].harga_jasa) + '</td>'
								if (data[1][k].status_piutang == 0) {
									statusHutang = "Hutang"
								} else if (data[1][k].status_piutang == 1) {
									statusHutang = "Lunas"
								} else {
									statusHutang = "Cash"
								}
								tabel += '<td>' + statusHutang + '</td>'
								tabel += '</tr>'
							}
						}
					}
				}
				if (!tabel) {
					tabel = '<td class="text-center" colspan="6">Data Masih kosong :)</td>'
				}
				$("#transaksiTerakhir").html(tabel)
			}
		});
	}

	function tanggalHariIni() {
		var now = new Date();
		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);
		var today = now.getFullYear() + "-" + (month) + "-" + (day);
		return today
	}

	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>