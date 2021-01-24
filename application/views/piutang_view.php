<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Piutang</h2>

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
							<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Data Piutang</h4>
							<div class="row m-2 p-2" style="background-color: royalblue; color:seashell;">
								<div class="col-2">Menampilkan data </div>
								<div class="col-1">
									Bulan :
								</div>
								<div class="col-3">
									<select class="form-control form-control-sm" id="bulan" onchange="ambil_data()">
										<option value="1" <?php if (date('m') == 1) echo "selected"; ?>>Januari</option>
										<option value="2" <?php if (date('m') == 2) echo "selected"; ?>>Februari</option>
										<option value="3" <?php if (date('m') == 3) echo "selected"; ?>>April</option>
										<option value="4" <?php if (date('m') == 4) echo "selected"; ?>>Maret</option>
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
								<div class="col-2">
									<select class="form-control form-control-sm" id="tahun" onchange="ambil_data()">
										<?php for ($i = 2020; $i < date("Y") + 1; $i++) { ?>
											<option value="<?php echo $i; ?>" <?php if (date('Y') == $i) echo "selected"; ?>><?php echo $i;  ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-1">
									Status :
								</div>
								<div class="col-2">
									<select class="form-control form-control-sm" id="pilihStatus" onchange="ambil_data()">
										<option value="0">Hutang</option>
										<option value="1">Lunas</option>
										<option value="2">Semua</option>
									</select>
								</div>
							</div>
							<!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Tambah Data
										</button> -->
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
							<!-- Modal -->
							<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header no-bd">
											<h5 class="modal-title">
												<span class="fw-mediumbold">Rician</span>
												<span class="fw-light">Hutang</span>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="table-responsive">
												<table id="piutang_list_data" class="display table table-striped table-hover">
													<thead>
														<tr>
															<th>Kode</th>
															<th>Nama</th>
															<th>Merk</th>
															<th>Jumlah</th>
															<th>Harga</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>TOTAL</th>
															<th colspan="4">
																<form><input type="text" min="0" class="form-control input-pill" id="total_bayar" placeholder="Rp" readonly></form>
															</th>
														</tr>
													</tfoot>
													<tbody id="myList">

													</tbody>
												</table>
											</div>
										</div>
										<div class="modal-footer no-bd">
											<div class="form-group">
												<select class="form-control input-pill" id="status" placeholder="">
													<option value="0">Hutang</option>
													<option value="1">Lunas</option>
												</select>
											</div>
											<div id="ubahModal_tombol"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="table-responsive" id="tempatTabel">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		// list();
		ambil_data();
	});



	// function ambil_data() {
	// 	$('#tabel_piutang').DataTable({
	// 		destroy: true,
	// 		"ajax": {
	// 			"url": "<?php echo site_url("piutang/tampil") ?>",
	// 			"dataSrc": ""
	// 		},
	// 		"columns": [{
	// 				"data": "tgl_transaksi"
	// 			},
	// 			{
	// 				"data": "tgl_jatuh_tempo"
	// 			},
	// 			{
	// 				"data": "nama_client"
	// 			},
	// 			{
	// 				"data": "status_piutang",
	// 				"render": function(data, type, row) {
	// 					if (data == 0) {
	// 						return "Hutang"
	// 					} else {
	// 						return "Lunas"
	// 					}

	// 				}
	// 			},
	// 			{
	// 				"data": "id_transaksi",
	// 				"render": function(data, type, row) {
	// 					// Tampilkan kolom aksi
	// 					var html = '<div class="form-button-action">' +
	// 						'<button onclick="ubah_list(' + data + ',' + row.status_piutang + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">' +
	// 						'<i class="fa fa-edit"></i>' +
	// 						'</button>';
	// 					return html
	// 				}

	// 			}
	// 		]
	// 	});
	// }

	function ambil_data() {
		var tahun = $("#tahun").val();
		var bulan = $("#bulan").val();
		var status = $("#pilihStatus").val();
		$("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
		var baris = '<table id="tabel_piutang" class="display table table-striped table-hover" ><thead><th>NO.</th><th>TANGGAL TRANSAKSI</th><th>JATUH TEMPO</th><th>NAMA CLIENT</th><th>STATUS</th><th style="width: 10%">Action</th></thead><tbody>'
		$.ajax({
			url: '<?= base_url() ?>piutang/tampil',
			method: 'post',
			data: "tahun=" + tahun + "&bulan=" + bulan + "&status=" + status,
			dataType: 'json',
			success: function(data) {
				for (let i = 0; i < data.length; i++) {
					baris += '<tr>'
					baris += '<td>' + (i + 1) + '</td>'
					baris += '<td>' + data[i].tgl_transaksi + '</td>'
					baris += '<td>' + data[i].tgl_jatuh_tempo + '</td>'
					baris += '<td>' + data[i].nama_client + '</td>'
					if (data[i].status_piutang == 0) {
						baris += '<td>Hutang</td>'
					} else {
						baris += '<td>Lunas</td>'
					}
					baris += '<td><div class="form-button-action"><button onclick="ubah_list(' + data[i].id_transaksi + ',' + data[i].status_piutang + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><i class="fa fa-edit"></i></button></div></td></tr>'
				}
				baris += '</tbody></table>'
				$("#tempatTabel").html(baris)
				$('#tabel_piutang').DataTable({
					"pageLength": 5,
				});
			}
		});
	}

	function ambil_data_piutang(transaksi, status) {
		var html = '';
		var total = 0;
		for (var i = 0; i < transaksi.length; i++) {
			var temp = parseInt(transaksi[i].jumlah) * parseInt(transaksi[i].harga);
			total += temp;
			// console.log(transaksi[i].tipe);
			html += '<tr>' +
				'<td>' + transaksi[i].kode + '</td>' +
				'<td>' + transaksi[i].nama + '</td>' +
				'<td>' + transaksi[i].merk + '</td>' +
				'<td>' + transaksi[i].jumlah + '</td>' +
				'<td>' + formatRupiah(transaksi[i].harga.toString()) + '</td>' +
				'</tr>';
		}
		$("#myList").html(html);
		document.getElementById('total_bayar').value = formatRupiah(total.toString());
		document.getElementById('status').value = status;
		$("#piutang_list_data").dataTable().fnDestroy();
	}

	function ubah_list(id, status) {
		var utang_list = [];
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>piutang/ubah_list',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				utang_list = [];
				for (var i = 0; i < data.length; i++) {
					var mydata = {
						"kode": data[i].kode_barang,
						"nama": data[i].nama_barang,
						"jumlah": data[i].jumlah_penjualan,
						"harga": data[i].harga_jual,
						"merk": data[i].merk_barang
					};

					utang_list[utang_list.length] = mydata;
				}

				$.ajax({
					type: 'POST',
					data: 'id=' + id,
					url: '<?= base_url() ?>piutang/ubah_list_jasa',
					dataType: 'json',
					success: function(data) {
						// console.log(data);
						for (var i = 0; i < data.length; i++) {
							var mydata = {
								"kode": data[i].id_jasa,
								"nama": data[i].nama_jasa,
								"jumlah": 1,
								"harga": data[i].harga_jasa,
								"merk": "-"
							};

							utang_list[utang_list.length] = mydata;
						}

						var html = '<button onclick="ubah(' + id + ')" id="ubah_button" type="button" class="btn btn-primary">Simpan</button> <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>';
						$("#ubahModal_tombol").html(html);
						ambil_data_piutang(utang_list, status);
						$('#ubahModal').modal('show');

					}
				});

				// $("#ubah_button").click(function showAlert() {
				// 	$("#edit-alert").fadeTo(2000, 500).slideUp(500, function() {
				// 		$("#edit-alert").slideUp(500);
				// 	});
				// });

			}
		});
	}

	function ubah(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id + '&status=' + document.getElementById('status').value,
			url: '<?= base_url() ?>piutang/ubah',
			dataType: 'json',
			success: function(data) {
				// consol.log(data)
				ambil_data();
				$('#ubahModal').modal('hide');
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