<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Jasa</h2>

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
								<img src="<?= base_url() ?>assets/img/jasa.jpg" alt="..." class="avatar-img rounded-circle">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="user-profile text-center">
							<div class="name">Jasa Service</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
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
							<div class="table-responsive" id="tempatTabel">
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
						Jasa
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<small class="text-danger" id="pesan_error_tambah"></small>
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nama_jasa">Nama Jasa</label>
								<input type="text" class="form-control input-pill" id="nama_jasa" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="harga_jasa">Harga Jasa</label>
								<input type="number" class="form-control input-pill" id="harga_jasa" placeholder="">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button onclick="tambah()" id="tambah_button" class="btn btn-primary">Tambah</button>
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
						Jasa
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<small class="text-danger" id="pesan_error_ubah"></small>
				<form>
					<input type="hidden" class="form-control input-pill" id="idJasa" placeholder="">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nama_jasa">Nama Jasa</label>
								<input type="text" class="form-control input-pill" id="ubah_nama_jasa" placeholder="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="harga_jasa">Harga Jasa</label>
								<input type="text" class="form-control input-pill" id="ubah_harga_jasa" placeholder="">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button onclick="edit()" id="ubahModal_tombol" class="btn btn-primary">Ubah</button>
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
				<p id="teksHapus"></p>
				<input type="hidden" id="id_hapus" name="id_hapus" />
			</div>
			<div class="modal-footer no-bd">
				<button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<script>
	tampilkan()

	function tampilkan() {
		$("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
		var baris = '<table id="tabelJasa" class="display table table-striped table-hover" ><thead><tr><th>NO</th><th>NAMA JASA</th><th>HARGA</th><th style="width: 10%">Action</th></tr></thead><tbody>'
		$.ajax({
			url: '<?= base_url() ?>jasa/tampil',
			method: 'post',
			dataType: 'json',
			success: function(data) {
				for (let i = 0; i < data.length; i++) {
					baris += '<tr>'
					baris += '<td>' + (i + 1) + '</td>'
					baris += '<td>' + data[i].nama_jasa + '</td>'
					baris += '<td>' + formatRupiah(data[i].harga_jasa.toString()) + '</td>'
					baris += '<td><div class="form-button-action"><button type="button" title="edit" class="btn btn-link btn-primary btn-lg" id="edit' + data[i].id_jasa + '" onClick="tryEdit(' + data[i].id_jasa + ')"><i class="fa fa-edit"></i></button>'
					baris += '<button type="button" title="hapus?" class="btn btn-link btn-danger" id="hapus' + data[i].id_jasa + '" onClick="tryHapus(' + data[i].id_jasa + ')"><i class="fa fa-times"></i></button>'
					baris += '</div></td></tr>'
				}
				baris += '</tbody></table>'
				$("#tempatTabel").html(baris)
				$('#tabelJasa').DataTable({
					"pageLength": 5,
				});
			}
		});
	}

	function tryTambah() {
		$("#nama_jasa").val("")
		$("#harga_jasa").val("")
		$("#addRowModal").modal('show')
		$('#pesan_error_tambah').html("")
	}

	function tambah() {
		$("#tambah_button").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		var nama = $("#nama_jasa").val()
		var harga = $("#harga_jasa").val()
		$.ajax({
			url: '<?= base_url() ?>jasa/tambah',
			method: 'post',
			data: "target=tbl_jasa&nama=" + nama + "&harga=" + harga,
			dataType: 'json',
			success: function(data) {
				if (data == "") {
					$("#addRowModal").modal('hide')
					tampilkan()
					$("#nama_jasa").val("")
					$("#harga_jasa").val("")
				} else {
					$('#pesan_error_tambah').html(data)
				}
				$("#tambah_button").html('Tambah')
			}
		});
	}

	function tryEdit(id) {
		$("#edit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$("#ubahModal").show()
		$("#idJasa").val(id)
		$.ajax({
			url: '<?= base_url() ?>jasa/ubah_list',
			method: 'post',
			data: "target=tbl_jasa&id=" + id,
			dataType: 'json',
			success: function(data) {
				$("#ubahModal").modal('show')
				$("#ubah_nama_jasa").val(data[0].nama_jasa)
				$("#ubah_harga_jasa").val(data[0].harga_jasa)
				$("#edit" + id).html('<i class="fa fa-edit"></i>')
			}
		});
	}

	function edit() {
		$("#ubahModal_tombol").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		var id = $("#idJasa").val()
		var nama = $("#ubah_nama_jasa").val()
		var harga = $("#ubah_harga_jasa").val()
		$.ajax({
			url: '<?= base_url() ?>jasa/ubah',
			method: 'post',
			data: "target=tbl_jasa&id=" + id + "&nama=" + nama + "&harga=" + harga,
			dataType: 'json',
			success: function(data) {
				if (data == "") {
					$("#ubahModal").modal('hide')
					tampilkan()
					$("#ubah_nama_jasa").val("")
					$("#ubah_harga_jasa").val("")
					$('#pesan_error_ubah').html("")
				} else {
					$('#pesan_error_ubah').html(data)
				}
				$("#ubahModal_tombol").html('Edit')
			}
		});
	}

	function tryHapus(id) {
		$("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$.ajax({
			url: '<?= base_url() ?>jasa/ubah_list',
			method: 'post',
			data: "target=tbl_jasa&id=" + id,
			dataType: 'json',
			success: function(data) {
				$("#id_hapus").val(id)
				$("#teksHapus").html("apakah anda yakin ingin menghapus Jasa dengan nama '" + data[0].nama_jasa + "' ?")

				$("#hapus" + id).html('<i class="fa fa-times"></i>')
			}
		});
		$("#hapusModal").modal('show')
	}

	function hapus() {
		$("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		var id = $("#id_hapus").val()
		$.ajax({
			url: '<?= base_url() ?>jasa/hapus',
			method: 'post',
			data: "target=tbl_jasa&id=" + id,
			dataType: 'json',
			success: function(data) {
				$("#id_hapus").val("")
				$("#teksHapus").html("")
				tampilkan()
				$("#hapusModal").modal('hide')
				$("#hapus").html('Hapus')
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