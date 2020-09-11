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
											<th>TANGGAL</th>
											<th>KODE BARANG</th>
											<th>NAMA BARANG</th>
											<th>HARGA KULAK</th>
											<th>JUMLAH PEMBELIAN</th>
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
<!-- Tambah Modal -->
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

								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jumlah">Jumlah Pembelian</label>
								<input oninput="jumlah_barang()" onchange="jumlah_barang()" type="number" min="1" class="form-control input-pill" id="jumlah" placeholder="">
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
								<label for="harga">Harga</label>
								<input oninput="jumlah_barang()" onchange="jumlah_barang()" type="text" class="form-control input-pill" id="harga" placeholder="" readonly>
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

<!-- Ubah Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-hidden="true">
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
								<label for="ubah_kode">Kode barang</label>
								<input oninput="ubah_tampil_data_kode()" onchange="ubah_tampil_data_kode()" type="text" class="form-control input-pill" id="ubah_kode" autocomplete="TRUE" list="kodes" placeholder="" readonly>
								<datalist onchange="ubah_tampil_data_kode()" id="kodes">

								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jumlah">Jumlah Pembelian</label>
								<input oninput="ubah_jumlah_barang()" onchange="ubah_jumlah_barang()" type="number" min="1" class="form-control input-pill" id="ubah_jumlah" placeholder="">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="nama">Nama Barang</label>
								<input type="text" class="form-control input-pill" id="ubah_nama" readonly>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="ubah_harga">Harga satuan</label>
								<input oninput="ubah_jumlah_barang()" onchange="ubah_jumlah_barang()" type="text" class="form-control input-pill" id="ubah_harga" placeholder="" readonly>
							</div>
						</div>
						<div class="col-sm-6" style="display: none;">
							<div class="form-group">
								<label for="ubah_total">Total</label>
								<input type="text" class="form-control input-pill" id="ubah_total" placeholder="" readonly>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd" id="ubahModal_tombol">
				<!-- <button type="button" onclick="ubah()" class="btn btn-primary">Ubah</button> -->
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
						Hapus Data</span>
					<span class="fw-light">
						Pembelian
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
	var barang = [];
	var id_selected = '';
	var stok = 0;
	var stok_ubah = 0;
	$(document).ready(function() {
		list();
		ambil_data();
	});

	function list() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>pembelian/list',
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

	function ubah_tampil_data_kode() {
		// alert(document.getElementById('kode').value);
		for (var i = 0; i < barang.length; i++) {
			if (document.getElementById('ubah_kode').value == barang[i].kode_barang) {
				document.getElementById('ubah_nama').value = barang[i].nama_barang;
				document.getElementById('ubah_harga').value = barang[i].harga_jual;

				id_selected = barang[i].id_barang;
				stok = barang[i].stok_barang;

				// console.log(id_selected);
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

	function ubah_jumlah_barang() {
		// alert("yeye");
		if (document.getElementById('ubah_jumlah').value != "" && document.getElementById('ubah_harga').value != "") {
			document.getElementById('ubah_total').value = parseInt(document.getElementById('ubah_jumlah').value) * parseInt(document.getElementById('ubah_harga').value);
		} else {
			document.getElementById('ubah_total').value = "";
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
				url: '<?= base_url() ?>pembelian/tambah',
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

	function ubah(id_pembelian, id_barang) {
		if (document.getElementById('ubah_jumlah').value == '') {
			document.getElementById('ubah_jumlah').focus();
		}
		if (document.getElementById('ubah_harga').value == "") {
			document.getElementById('ubah_harga').focus();
		}
		if (document.getElementById('ubah_kode').value == "") {
			document.getElementById('ubah_kode').focus();
		}
		if (document.getElementById('ubah_kode').value != "" && document.getElementById('ubah_harga').value != "" && document.getElementById('ubah_jumlah').value != '') {
			$.ajax({
				type: 'POST',
				url: '<?= base_url() ?>pembelian/ubah',
				data: 'id_pembelian=' + id_pembelian + '&id_barang=' + id_barang + '&jumlah=' + document.getElementById('ubah_jumlah').value +
					'&stok=' + stok + '&stok_ubah=' + stok_ubah,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					ambil_data();
					$('#ubahModal').modal('hide');
				}
			});
		}
	}

	function hapus(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>pembelian/hapus',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('#hapusModal').modal('hide');
				ambil_data();
			}
		});
	}

	function ambil_data() {
		$('#tabel_pembelian').DataTable({
			destroy: true,
			"ajax": {
				"url": "<?php echo site_url("pembelian/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "tgl_pembelian",
					"render": function(data, type, row) {
						var tanggal = data.split(" ");
						return tanggal[0]
					}
				},
				{
					"data": "kode_barang"
				},
				{
					"data": "nama_barang"
				},
				{
					"data": "harga_kulak"
				},
				{
					"data": "jumlah_pembelian"
				},
				{
					"data": "id_pembelian",
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
			url: '<?= base_url() ?>pembelian/ubah_list',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				for (var i = 0; i < data.length; i++) {
					document.getElementById('jumlah').value = "";

					document.getElementById("ubah_kode").value = data[i].kode_barang;
					document.getElementById("ubah_nama").value = data[i].nama_barang;
					document.getElementById("ubah_harga").value = data[i].harga_kulak;
					document.getElementById("ubah_jumlah").value = data[i].jumlah_pembelian;

					var html = '<button onclick="ubah(' + data[i].id_pembelian + ',' + data[i].id_barang + ')" type="button" data-dismiss="modal" class="btn btn-primary">Ubah</button>';
					$("#ubahModal_tombol").html(html);
					stok_ubah = data[i].jumlah_pembelian;
					stok = data[i].stok_barang;
					$('#ubahModal').modal('show');
				}
			}
		});
	}

	function hapus_list(id) {
		var html = '<button onclick="hapus(' + id + ')" id="hapus_button" type="button" data-dismiss="modal" class="btn btn-danger">Hapus</button>';
		$("#hapusModal_tombol").html(html);
		$('#hapusModal').modal('show');
	}
</script>