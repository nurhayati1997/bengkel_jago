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
							<button class="btn btn-primary btn-round ml-auto" id="tombolTambah" onclick="tryTambah()">
								<i class="fa fa-plus"></i>
								Tambah Data
							</button>
						</div>
						<div class="row m-2 p-2" style="background-color: royalblue; color:seashell;">
							<div class="col-2">
							</div>
							<div class="col-2">Menampilkan data </div>
							<div class="col-1">
								Bulan :
							</div>
							<div class="col-3">
								<select class="form-control form-control-sm" id="bulan" onchange="ambil_data()">
									<option value="1" <?php if (date('m') == 1) echo "selected"; ?>>Januari</option>
									<option value="2" <?php if (date('m') == 2) echo "selected"; ?>>Februari</option>
									<option value="3" <?php if (date('m') == 3) echo "selected"; ?>>Maret</option>
									<option value="4" <?php if (date('m') == 4) echo "selected"; ?>>April</option>
									<option value="5" <?php if (date('m') == 5) echo "selected"; ?>>Mei</option>
									<option value="6" <?php if (date('m') == 6) echo "selected"; ?>>Juni</option>
									<option value="7" <?php if (date('m') == 7) echo "selected"; ?>>Juli</option>
									<option value="8" <?php if (date('m') == 8) echo "selected"; ?>>Agustus</option>
									<option value="9" <?php if (date('m') == 9) echo "selected"; ?>>September</option>
									<option value="10" <?php if (date('m') == 10) echo "selected"; ?>>Oktober</option>
									<option value="11" <?php if (date('m') == 11) echo "selected"; ?>>November</option>
									<option value="12" <?php if (date('m') == 12) echo "selected"; ?>>Desember</option>
								</select>
							</div>
							<div class="col-1">
								Tahun :
							</div>
							<div class="col-3">
								<select class="form-control form-control-sm" id="tahun" onchange="ambil_data()">
									<?php for ($i = 2020; $i < date("Y") + 1; $i++) { ?>
										<option value="<?php echo $i;  ?>" <?php if (date('Y') == $i) echo "selected"; ?>><?php echo $i;  ?></option>
									<?php } ?>
								</select>
							</div>
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
							<div class="table-responsive" id="tempatTabel">
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
								<label for="id">Id barang</label>
								<div id="errorBarang"></div>
								<input oninput="tampil_data_kode()" onchange="tampil_data_kode()" type="text" class="form-control input-pill" id="id" autocomplete="TRUE" list="kodes" placeholder="">
								<datalist onchange="tampil_data_kode()" id="kodes">

								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jumlah">Jumlah Pembelian</label>
								<input type="number" min="1" class="form-control input-pill" id="jumlah" placeholder="">
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
								<label for="keterangan">Keterangan</label>
								<textarea type="text" class="form-control input-pill" id="keterangan" readonly> </textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="kulak">Harga Kulak</label>
								<input type="text" class="form-control input-pill" id="kulak" placeholder="" readonly>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jual">Harga Jual</label>
								<input type="text" class="form-control input-pill" id="jual" placeholder="" readonly>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="stok">Stok Barang</label>
								<input type="text" class="form-control input-pill" id="stok" placeholder="" readonly>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button type="button" onclick="tambah()" id="tambah_button" class="btn btn-primary">Tambah</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
								<label for="ubah_id">Id Barang</label>
								<input type="text" class="form-control input-pill" id="ubah_id" placeholder="" readonly>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jumlah">Jumlah Pembelian</label>
								<input type="number" min="1" class="form-control input-pill" id="ubah_jumlah" placeholder="">
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
								<label for="ubah_keterangan">Keterangan</label>
								<textarea type="text" class="form-control input-pill" id="ubah_keterangan" readonly> </textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_kulak">Harga Kulak</label>
								<input type="text" class="form-control input-pill" id="ubah_kulak" placeholder="" readonly>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jual">Harga Jual</label>
								<input type="text" class="form-control input-pill" id="ubah_jual" placeholder="" readonly>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="stok">Stok Barang</label>
								<input type="text" class="form-control input-pill" id="ubah_stok" placeholder="" readonly>
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
	var barangKosong = true;
	$(document).ready(function() {
		list();
		ambil_data();
	});

	function list() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url() ?>pembelian/lista',
			dataType: 'json',
			success: function(data) {
				barang = data;
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].id_barang + '">' + data[i].nama_barang + ' | ' + data[i].jenis + ' | ' + data[i].merk_barang + ' | ' + data[i].keterangan + ' | ' + data[i].kode_barang + '</option>';;
				}
				$("#kodes").html(html);
			}
		});
	}

	function tampil_data_kode() {
		// alert(document.getElementById('kode').value);
		$("#errorBarang").html("")
		barangKosong = true;
		for (var i = 0; i < barang.length; i++) {
			if (document.getElementById('id').value == barang[i].id_barang) {
				document.getElementById('nama').value = barang[i].nama_barang;
				document.getElementById('keterangan').value = barang[i].jenis + ' | ' + barang[i].merk_barang + ' | ' + barang[i].keterangan + ' | ' + barang[i].kode_barang;
				document.getElementById('jual').value = formatRupiah(barang[i].harga_jual.toString());
				document.getElementById('kulak').value = formatRupiah(barang[i].harga_kulak.toString());
				document.getElementById('stok').value = barang[i].stok_barang;

				id_selected = barang[i].id_barang;
				stok = barang[i].stok_barang;
				barangKosong = false;
			}
		}

		if (barangKosong) {
			$("#errorBarang").html("<small class='text-danger'>id tidak ditemukan.</small>")
			document.getElementById('jumlah').value = "";
			document.getElementById('nama').value = "";
			document.getElementById('keterangan').value = "";
			document.getElementById('jual').value = "";
		}
	}

	function tryTambah() {
		$("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		$("#tambahModal").modal('show')
		$("#tombolTambah").html('<i class="fa fa-plus"></i> Tambah Data')
	}

	function tambah() {
		$("#tambah_button").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		if (barangKosong) {
			$("#errorBarang").html("<small class='text-danger'>id tidak ditemukan.</small>")
		} else {
			if (document.getElementById('jumlah').value == '') {
				document.getElementById('jumlah').focus();
			}
			if (document.getElementById('id').value == "") {
				document.getElementById('id').focus();
			}
			if (document.getElementById('id').value != "" && document.getElementById('jumlah').value != '') {
				$.ajax({
					type: 'POST',
					url: '<?= base_url() ?>pembelian/tambah',
					data: 'id=' + id_selected + '&jumlah=' + document.getElementById('jumlah').value + '&jual=' + parseInt(document.getElementById('jual').value.replace(/\./g, '')) + '&stok=' + stok + '&kulak=' + parseInt(document.getElementById('kulak').value.replace(/\./g, '')),
					dataType: 'json',
					success: function(data) {
						document.getElementById('jumlah').value = "";
						document.getElementById('jual').value = "";
						document.getElementById('kulak').value = "";
						document.getElementById('id').value = "";
						document.getElementById('nama').value = "";

						ambil_data();
						$("#tambah_button").html('Tambah')
						$('#tambahModal').modal('hide');

					}
				});
			}
		}
	}

	function ubah(id_pembelian, id_barang) {
		$("#ubah_button").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		if (document.getElementById('ubah_jumlah').value == '') {
			document.getElementById('ubah_jumlah').focus();
		}
		if (document.getElementById('ubah_jual').value == "") {
			document.getElementById('ubah_jual').focus();
		}
		if (document.getElementById('ubah_id').value == "") {
			document.getElementById('ubah_id').focus();
		}
		if (document.getElementById('ubah_id').value != "" && document.getElementById('ubah_jual').value != "" && document.getElementById('ubah_jumlah').value != '') {
			$.ajax({
				type: 'POST',
				url: '<?= base_url() ?>pembelian/ubah',
				data: 'id_pembelian=' + id_pembelian + '&id_barang=' + id_barang + '&jumlah=' + document.getElementById('ubah_jumlah').value +
					'&stok=' + stok + '&stok_ubah=' + stok_ubah,
				dataType: 'json',
				success: function(data) {
					$('#ubahModal').modal('hide');
					ambil_data();

				}
			});
		}
		$("#ubah_button").html('Ubah')
	}

	function hapus(id) {
		$("#hapus_button").html('<i class="fas fa-spinner fa-pulse"></i> Memuat..')
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>pembelian/hapus',
			dataType: 'json',
			success: function(data) {
				// console.log(data);

				$('#hapusModal').modal('hide');

				ambil_data();
			}
		});
		$("#hapus_button").html('Hapus')
	}

	function ambil_data() {
		var tahun = $("#tahun").val();
		var bulan = $("#bulan").val();
		$("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
		var baris = '<table id="tabel_pembelian" class="display table table-striped table-hover" ><thead><tr><th style="width: 5%">Action</th><th>ID BARANG</th><th>TANGGAL</th><th>NAMA</th><th>KETERANGAN</th><th>JUMLAH PEMBELIAN</th><th>STOK TERKINI</th><th>HARGA KULAK</th><th>HARGA JUAL</th></tr></thead><tbody>'
		$.ajax({
			url: '<?= base_url() ?>pembelian/tampil',
			method: 'post',
			data: "tahun=" + tahun + "&bulan=" + bulan,
			dataType: 'json',
			success: function(data) {
				for (let i = 0; i < data.length; i++) {
					baris += '<tr>'

					baris += '<td><div class="form-button-action"><button type="button" title="edit" class="btn btn-link btn-primary btn-lg" id="edit' + data[i].id_pembelian + '" onClick="ubah_list(' + data[i].id_pembelian + ')"><i class="fa fa-edit"></i></button>'
					baris += '<button type="button" title="hapus?" class="btn btn-link btn-danger" id="hapus' + data[i].id_pembelian + '" onClick="hapus_list(' + data[i].id_pembelian + ')"><i class="fa fa-times"></i></button></div></td>'
					baris += '<td>' + data[i].id_barang + '</td>'
					baris += '<td>' + data[i].tgl_pembelian + '</td>'
					baris += '<td>' + data[i].nama_barang + '</td>'
					baris += '<td>' + data[i].jenis + ' | ' + data[i].merk_barang + ' | ' + data[i].keterangan + ' | ' + data[i].kode_barang + '</td>'
					baris += '<td>' + data[i].jumlah_pembelian + '</td>'
					baris += '<td>' + data[i].stok_barang + '</td>'
					baris += '<td>' + formatRupiah(data[i].harga_kulak.toString()) + '</td>'
					baris += '<td>' + formatRupiah(data[i].harga_jual.toString()) + '</td>'
					baris += '</tr>'
				}
				baris += '</tbody></table>'
				$("#tempatTabel").html(baris)
				$('#tabel_pembelian').DataTable({
					"pageLength": 5,
				});
			}
		});
	}

	function ubah_list(id) {
		$("#edit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>pembelian/ubah_list',
			dataType: 'json',
			success: function(data) {
				document.getElementById("ubah_id").value = data.id_pembelian;
				document.getElementById("ubah_nama").value = data.nama_barang;
				document.getElementById("ubah_jual").value = formatRupiah(data.harga_jual.toString());
				document.getElementById('ubah_keterangan').value = data.jenis + ' | ' + data.merk_barang + ' | ' + data.keterangan + ' | ' + data.kode_barang;
				document.getElementById("ubah_jumlah").value = data.jumlah_pembelian;
				document.getElementById("ubah_kulak").value = formatRupiah(data.harga_kulak.toString());
				document.getElementById("ubah_stok").value = data.stok_barang;

				var html = '<button onclick="ubah(' + data.id_pembelian + ',' + data.id_barang + ')" id="ubah_button" type="button" class="btn btn-primary">Ubah</button><button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>';
				$("#ubahModal_tombol").html(html);
				stok_ubah = data.jumlah_pembelian;
				stok = data.stok_barang;
				$('#ubahModal').modal('show');
			}
		});
		$("#edit" + id).html('<i class="fa fa-edit"></i>')
	}

	function hapus_list(id) {
		$("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		var html = '<button onclick="hapus(' + id + ')" id="hapus_button" type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>';
		$("#hapusModal_tombol").html(html);
		$('#hapusModal').modal('show');

		$("#hapus" + id).html('<i class="fa fa-times"></i>')
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