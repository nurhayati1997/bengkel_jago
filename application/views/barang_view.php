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
							<button class="btn btn-primary btn-round ml-auto" onclick="tryTambah()" id="tombolTambah">
								<i class="fa fa-plus"></i>
								Tambah Data
							</button>
						</div>
						<div class="card-footer">

							<!-- <div style="display: none;" class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
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
							</div> -->
							<div class="table-responsive">
								<table id="myTable" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th style="width: 1%">AKSI</th>
											<th>ID</th>
											<th>NAMA</th>
											<th>MERK</th>
											<th>JENIS MOBIL</th>
											<th>KETERANGAN</th>
											<th>KODE</th>
											<th>LOKASI</th>
											<th>STOK</th>
											<th>DISTRIBUTOR</th>
											<th>HARGA KULAK</th>
											<th>HARGA JUAL</th>
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
								<!-- <input type="text" class="form-control input-pill" id="kode" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="kode" autocomplete="TRUE" list="kodes" placeholder="">
								<datalist id="kodes">
								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jenis">Jenis Mobil</label>
								<!-- <input type="text" class="form-control input-pill" id="jenis" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="jenis" autocomplete="TRUE" list="jeniss" placeholder="">
								<datalist id="jeniss">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nama">Nama Barang</label>
								<!-- <input type="text" class="form-control input-pill" id="nama" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="nama" autocomplete="TRUE" list="namas" placeholder="">
								<datalist id="namas">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="merk">Merk</label>
								<!-- <input type="text" class="form-control input-pill" id="merk" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="merk" autocomplete="TRUE" list="merks" placeholder="">
								<datalist id="merks">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ket">Keterangan</label>
								<input type="text" class="form-control input-pill" id="ket" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="lokasi">Lokasi</label>
								<!-- <input type="text" class="form-control input-pill" id="lokasi" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="lokasi" autocomplete="TRUE" list="lokasis" placeholder="">
								<datalist id="lokasis">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="distributor">Distributor</label>
								<!-- <input type="text" class="form-control input-pill" id="distributor" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="distributor" autocomplete="TRUE" list="distributors" placeholder="">
								<datalist id="distributors">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="satuan">Harga Kulak</label>
								<input type="number" min="0" class="form-control input-pill" id="satuan" placeholder="Rp">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jual">Harga jual</label>
								<input type="number" min="0" class="form-control input-pill" id="jual" placeholder="Rp">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="pagu">Jumlah Pagu</label>
								<input type="number" min="0" class="form-control input-pill" id="pagu" placeholder="">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button onclick="tambah()" id="tambah_button" type="button" class="btn btn-primary">Tambah</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
								<!-- <input type="text" class="form-control input-pill" id="ubah_kode" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="ubah_kode" autocomplete="TRUE" list="ubah_kodes" placeholder="">
								<datalist id="ubah_kodes">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jenis">Jenis Mobil</label>
								<!-- <input type="text" class="form-control input-pill" id="ubah_jenis" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="ubah_jenis" autocomplete="TRUE" list="ubah_jeniss" placeholder="">
								<datalist id="ubah_jeniss">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_nama">Nama Barang</label>
								<!-- <input type="text" class="form-control input-pill" id="ubah_nama" placeholder="barang"> -->
								<input type="text" class="form-control input-pill" id="ubah_nama" autocomplete="TRUE" list="ubah_namas" placeholder="">
								<datalist id="ubah_namas">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_merk">Merk</label>
								<!-- <input type="text" class="form-control input-pill" id="ubah_merk" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="ubah_merk" autocomplete="TRUE" list="ubah_merks" placeholder="">
								<datalist id="ubah_merks">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_ket">Keterangan</label>
								<input type="text" class="form-control input-pill" id="ubah_ket" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_lokasi">Lokasi</label>
								<!-- <input type="text" class="form-control input-pill" id="ubah_lokasi" placeholder=""> -->
								<input type="text" class="form-control input-pill" id="ubah_lokasi" autocomplete="TRUE" list="ubah_lokasis" placeholder="">
								<datalist id="ubah_lokasis">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_satuan">Harga Kulak</label>
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
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_pagu">Jumlah Pagu</label>
								<input type="number" min="0" class="form-control input-pill" id="ubah_pagu" placeholder="">
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

		//datatabel
		ambil_data();
		daftar();
	});

	function tryTambah() {
		$("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		$("#addRowModal").modal('show')
		$("#tombolTambah").html('<i class="fa fa-plus"></i> Tambah Data')
	}

	function tambah() {
		$("#tambah_button").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		if (document.getElementById("pagu").value == "") {
			document.getElementById("pagu").focus();
		}
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
		}
		if (document.getElementById("kode").value != "" && document.getElementById("jenis").value != "" && document.getElementById("nama").value != "" &&
			document.getElementById("distributor").value != "" && document.getElementById("merk").value != "" && document.getElementById("satuan").value != "" &&
			document.getElementById("jual").value != "" && document.getElementById("pagu").value != "") {
			// console.log("sukses");
			$.ajax({
				type: 'POST',
				data: 'tabel="tbl_barang"' + '&kode=' + document.getElementById("kode").value +
					'&jenis=' + document.getElementById("jenis").value + '&nama=' + document.getElementById("nama").value +
					'&distributor=' + document.getElementById("distributor").value + '&satuan=' + document.getElementById("satuan").value +
					'&jual=' + document.getElementById("jual").value + '&merk=' + document.getElementById("merk").value + '&pagu=' + document.getElementById("pagu").value +
					'&ket=' + document.getElementById("ket").value + '&lokasi=' + document.getElementById("lokasi").value,
				url: '<?= base_url() ?>barang/tambah',
				dataType: 'json',
				success: function(data) {
					document.getElementById("kode").value = "";
					document.getElementById("nama").value = "";
					document.getElementById("jenis").value = "";
					document.getElementById("merk").value = "";
					document.getElementById("distributor").value = "";
					document.getElementById("satuan").value = "";
					document.getElementById("jual").value = "";
					document.getElementById("pagu").value = "";

					$('#addRowModal').modal('hide');
					ambil_data();
				}
			});
		}
		$("#tambah_button").html('Tambah')
		// console.log(document.getElementById("kode").value);
	}

	function ambil_data() {
		$('#myTable').DataTable({
			destroy: true,
			"ajax": {
				"url": "<?php echo site_url("barang/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "id_barang",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						var html = "";
						if (row.hapus == 0) {
							html += '<div class="form-button-action">' +
								'<button onclick="ubah_list(' + data + ')" id="edit' + data + '" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">' +
								'<i class="fa fa-edit"></i>' +
								'</button>' + '<button onclick="hapus_list(' + data + ')" id="hapus' + data + '" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">' +
								'<i class="fa fa-times"></i>' +
								'</button>' +
								'</div>';
						}
						return html
					}
				},
				{
					"data": "id_barang"
				},
				{
					"data": "nama_barang"
				},
				{
					"data": "merk_barang"
				},
				{
					"data": "jenis"
				},
				{
					"data": "keterangan"
				},
				{
					"data": "kode_barang"
				},
				{
					"data": "lokasi"
				},
				{
					"data": "stok_barang"
				},
				{
					"data": "distributor"
				},
				{
					"data": "harga_kulak",
					"render": function(data, type) {
						return formatRupiah(data.toString())
					}
				},
				{
					"data": "harga_jual",
					"render": function(data, type) {
						return formatRupiah(data.toString())
					}
				}
			]
		});
	}

	function ubah_list(id) {
		$("#edit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>barang/ubah_list',
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
					document.getElementById("ubah_pagu").value = data[i].pagu;
					document.getElementById("ubah_ket").value = data[i].keterangan;
					document.getElementById("ubah_lokasi").value = data[i].lokasi;
					var html = '<button onclick="ubah(' + id + ')" id="ubah_button" type="button" class="btn btn-primary">Ubah</button><button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>';
					$("#ubahModal_tombol").html(html);

					$("#ubah_button").click(function showAlert() {
						$("#edit-alert").fadeTo(2000, 500).slideUp(500, function() {
							$("#edit-alert").slideUp(500);
						});
					});

					$('#ubahModal').modal('show');
				}
			}
		});
		$("#edit" + id).html('<i class="fa fa-edit"></i>')
	}

	function ubah(id) {
		$("#ubah_button").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		if (document.getElementById("ubah_pagu").value == "") {
			document.getElementById("ubah_pagu").focus();
		}
		if (document.getElementById("ubah_jual").value == "") {
			document.getElementById("ubah_jual").focus();
		}
		if (document.getElementById("ubah_satuan").value == "") {
			document.getElementById("ubah_satuan").focus();
		}
		if (document.getElementById("ubah_merk").value == "") {
			document.getElementById("ubah_merk").focus();
		}
		if (document.getElementById("ubah_distributor").value == "") {
			document.getElementById("ubah_distributor").focus();
		}
		if (document.getElementById("ubah_nama").value == "") {
			document.getElementById("ubah_nama").focus();
		}
		if (document.getElementById("ubah_jenis").value == "") {
			document.getElementById("ubah_jenis").focus();
		}
		if (document.getElementById("ubah_kode").value == "") {
			document.getElementById("ubah_kode").focus();
		}
		if (document.getElementById("ubah_kode").value != "" && document.getElementById("ubah_jenis").value != "" && document.getElementById("ubah_nama").value != "" && document.getElementById("ubah_distributor").value != "" && document.getElementById("ubah_merk").value != "" && document.getElementById("ubah_satuan").value != "" && document.getElementById("ubah_jual").value != "" && document.getElementById("ubah_pagu").value != "") {
			$.ajax({
				type: 'POST',
				data: 'id=' + id + '&kode=' + document.getElementById("ubah_kode").value +
					'&jenis=' + document.getElementById("ubah_jenis").value + '&nama=' + document.getElementById("ubah_nama").value +
					'&distributor=' + document.getElementById("ubah_distributor").value + '&satuan=' + document.getElementById("ubah_satuan").value +
					'&jual=' + document.getElementById("ubah_jual").value + '&merk=' + document.getElementById("ubah_merk").value + '&pagu=' + document.getElementById("ubah_pagu").value +
					'&ket=' + document.getElementById("ubah_ket").value + '&lokasi=' + document.getElementById("ubah_lokasi").value,
				url: '<?= base_url() ?>barang/ubah',
				dataType: 'json',
				success: function(data) {
					// console.log(data);
					$('#ubahModal').modal('hide');

					ambil_data();
				}
			});
		}
		$("#ubah_button").html('Ubah')
	}

	function hapus_list(id) {
		$("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		var html = '<button onclick="hapus(' + id + ')" id="hapus_button" type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>';
		$("#hapusModal_tombol").html(html);

		$("#hapus_button").click(function showAlert() {
			$("#delete-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#delete-alert").slideUp(500);
			});
		});

		$('#hapusModal').modal('show');
		$("#hapus" + id).html('<i class="fa fa-times"></i>')
	}

	function hapus(id) {
		$("#hapus_button").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>barang/hapus',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#hapusModal').modal('hide');

				ambil_data();
			}
		});

		$("#hapus_button").html('Hapus')
	}

	function daftar() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>barang/daftar',
			dataType: 'json',
			success: function(data) {
				var kodes = '';
				var jeniss = '';
				var namas = '';
				var merks = '';
				var lokasis = '';
				var distributors = '';

				for (var i = 0; i < data["kodes"].length; i++) {
					kodes += '<option value="' + data["kodes"][i].kode_barang + '"></option>';
				}
				$("#kodes").html(kodes);
				$("#ubah_kodes").html(kodes);

				for (var i = 0; i < data["jeniss"].length; i++) {
					jeniss += '<option value="' + data["jeniss"][i].jenis + '"></option>';
				}
				$("#jeniss").html(jeniss);
				$("#ubah_jeniss").html(jeniss);

				for (var i = 0; i < data["namas"].length; i++) {
					jeniss += '<option value="' + data["namas"][i].nama_barang + '"></option>';
				}
				$("#namas").html(namas);
				$("#ubah_namas").html(namas);

				for (var i = 0; i < data["merks"].length; i++) {
					merks += '<option value="' + data["merks"][i].merk_barang + '"></option>';
				}
				$("#merks").html(merks);
				$("#ubah_merks").html(merks);

				for (var i = 0; i < data["lokasis"].length; i++) {
					lokasis += '<option value="' + data["lokasis"][i].lokasi + '"></option>';
				}
				$("#lokasis").html(lokasis);
				$("#ubah_lokasis").html(lokasis);

				for (var i = 0; i < data["distributors"].length; i++) {
					jeniss += '<option value="' + data["distributors"][i].distributors + '"></option>';
				}
				$("#distributors").html(distributors);
				$("#ubah_distributors").html(distributors);
			}
		});
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