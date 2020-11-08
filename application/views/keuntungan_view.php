			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Laporan Keuntungan</h2>

							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-5">
							<div class="card-pricing2 card-primary">
								<div class="pricing-header">
									<h3 class="fw-bold"> </h3>
								</div>
								<div class="price-value">
									<div class="value">
										<span class="currency">DATA</span>
										<!-- <span class="amount">1<span>99</span></span> -->
										<span class="month">proses</span>
									</div>
								</div>
								<hr>
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="pillInput">Dari tgl</label>
												<input type="date" class="form-control input-pill" id="tanggalMulai" placeholder="Rp">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="pillInput">Sampai tgl</label>
												<input type="date" class="form-control input-pill" id="tanggalSelesai" placeholder="Rp">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<div id="pesanError" class="badge badge-danger"></div>
											</div>
										</div>
									</div>
									<a href="#" id="tombolProses" class="btn btn-primary btn-border btn-lg w-75 fw-bold mb-3" onclick="tampilkan()">Proses</a>
								</form>
								<div class="row py-3">
									<div class="col-md-12">
										<div id="chart-container">
											<canvas id="totalIncomeChart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<div class="col-sm-6">
											<h5 class="card-title">Data Transaksi</h5>
											<div id="judulTanggal" class="badge badge-info"></div>
										</div>
										<div class="col-sm-3">
											<button class="btn btn-primary btn-border btn-round mr-2" onclick="eksport()">Cetak</button>
										</div>
										<div class="col-sm-3">
											<div class="dropdown">
												<select class="btn btn-warning btn-border btn-round dropdown-toggle" onChange="tampilkan()" id="jenisLaporan">
													<option value="1">Barang</option>
													<option value="2">Jasa</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive" id="tempat_tabel">

								</div>
								<br />
								<div class="col-sm-12 col-md-12">
									<div class="card card-stats card-round">
										<div class="card-body ">
											<div class="row">
												<div class="col-5">
													<div class="icon-big text-center">
														<i class="flaticon-coins text-success"></i>
													</div>
												</div>
												<div class="col-7 col-stats">
													<div class="numbers">
														<p class="card-category">Total Keuntungan :</p>
														<h4 class="card-title" id="keuntungan">Rp. 0</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="hapus_modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
									Hapus</span>
								<span class="fw-light">
									Pengguna
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
			<div class="modal fade bd-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">Rician Penjualans</span>
								<span class="fw-light">Jasa</span>
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
											<th>No.</th>
											<th>Tanggal</th>
											<th>Nama</th>
											<th>Harga</th>
											<th>Piutang</th>
											<th>Kasir</th>
										</tr>
									</thead>
									<tbody id="myList">

									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer no-bd">
							<button type="button" class="btn btn-info" data-dismiss="modal">Selesai</button>
						</div>
					</div>
				</div>
			</div>
			</div>

			<script src="<?= base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>
			<script>
				function tampilkanChart() {
					var target = ""
					var jenisLaporan = $("#jenisLaporan").val();
					if (jenisLaporan == "1") {
						target = "vw_penjualan"
					} else {
						target = "vw_penjualan_jasa"
					}
					var keuntungan = []
					var hari = []
					$.ajax({
						url: '<?= base_url() ?>keuntungan/keuntunganMingguan',
						method: 'post',
						data: "target=" + target,
						dataType: 'json',
						success: function(data) {
							for (let i = 0; i < data.length; i++) {
								keuntungan.push(data[i][1])
								hari.push(data[i][0])
							}
							var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

							var mytotalIncomeChart = new Chart(totalIncomeChart, {
								type: 'bar',
								data: {
									labels: hari,
									datasets: [{
										label: "Total Income",
										backgroundColor: '#ff9e27',
										borderColor: 'rgb(23, 125, 255)',
										data: keuntungan,
									}],
								},
								options: {
									responsive: true,
									maintainAspectRatio: false,
									legend: {
										display: false,
									},
									scales: {
										yAxes: [{
											ticks: {
												display: false //this will remove only the label
											},
											gridLines: {
												drawBorder: false,
												display: false
											}
										}],
										xAxes: [{
											gridLines: {
												drawBorder: false,
												display: false
											}
										}]
									},
								}
							});
						}
					});
				}

				settanggal()
				tampilkan()

				function settanggal() {
					var now = new Date();
					var day = ("0" + now.getDate()).slice(-2);
					var month = ("0" + (now.getMonth() + 1)).slice(-2);
					var today = now.getFullYear() + "-" + (month) + "-" + (day);

					$("#tanggalMulai").val(today)
					$("#tanggalSelesai").val(today)
				}

				function tampilkan() {
					tampilkanChart()
					var jenisLaporan = $("#jenisLaporan").val();

					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()

					if (tanggalMulai > tanggalSelesai) {
						$("#pesanError").html("Tanggal Mulai tidak Boleh Melebihi tanggal Selesai")
					} else {
						$("#pesanError").html("")
						if (jenisLaporan == "1") {
							barangByDate()
						} else {
							jasaByDate()
						}
						$("#judulTanggal").html("Tanggal : " +
							tanggalMulai + " Sampai " + tanggalSelesai)
					}
				}

				function barangByDate() {
					$("#tombolProses").html('<i class="fas fa-spinner fa-pulse"></i> Memproses...')
					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()
					var keuntungan = 0;
					var totalKeuntungan = 0;
					var statusHutang = ""
					var tabel = '<table id="add-row" class="display table table-striped table-hover" ><thead><tr><th>AKSI</th><th>NO</th><th>TANGGAL</th><th>NAMA</th><th>MERK</th><th>KETERANGAN</th><th>KODE</th><th>KULAK</th><th>JUAL</th><th>QUANTITY</th><th>TOTAL</th><th>UNTUNG</th><th>PIUTANG</th><th>KASIR</th></tr></thead><tbody>'
					$.ajax({
						url: '<?= base_url() ?>keuntungan/getDataBarang',
						method: 'post',
						data: "target=tbl_penjualan&tanggalMulai=" + tanggalMulai + "&tanggalSelesai=" + tanggalSelesai,
						dataType: 'json',
						success: function(data) {
							console.log(data)
							for (let i = 0; i < data.length; i++) {
								keuntungan = ((data[i].harga_jual - data[i].harga_kulak) * data[i].jumlah_penjualan)
								totalKeuntungan += keuntungan
								tabel += '<tr>'
								tabel += '<td><button type="button" title="hapus?" class="btn btn-link btn-danger" id="hapus' + data[i].id_penjualan + '" onClick="tryHapus(' + data[i].id_penjualan + ')"><i class="fa fa-times"></i></button></td>'
								tabel += '<td>' + (i + 1) + '</td>'
								tabel += '<td>' + data[i].tgl_transaksi + '</td>'
								tabel += '<td>' + data[i].nama_barang + '</td>'
								tabel += '<td>' + data[i].merk_barang + '</td>'
								tabel += '<td>' + data[i].keterangan + '</td>'
								tabel += '<td>' + data[i].kode_barang + '</td>'
								tabel += '<td>' + formatRupiah(data[i].harga_kulak) + '</td>'
								tabel += '<td>' + formatRupiah(data[i].harga_jual) + '</td>'
								tabel += '<td>' + data[i].jumlah_penjualan + '</td>'
								tabel += '<td>' + formatRupiah((data[i].harga_jual * data[i].jumlah_penjualan).toString()) + '</td>'
								tabel += '<td>' + formatRupiah(keuntungan.toString()) + '</td>'
								if (data[i].status_piutang == 0) {
									statusHutang = "Hutang"
								} else if (data[i].status_piutang == 1) {
									statusHutang = "Lunas"
								} else {
									statusHutang = "Cash"
								}
								tabel += '<td>' + statusHutang + '</td>'
								tabel += '<td>' + data[i].nama + '</td>'
								tabel += '</tr>'
							}
							tabel += '</tbody></table>'
							$("#tempat_tabel").html(tabel)
							$("#keuntungan").html('Rp. ' + formatRupiah(totalKeuntungan.toString()))

							$('#add-row').DataTable({
								"pageLength": 5,
							});
							$("#tombolProses").html('Proses')
						}
					});
				}

				function jasaByDate() {
					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()
					var totalKeuntungan = 0;
					var tabel = '<table id="add-row" class="display table table-striped table-hover" ><thead><tr><th>AKSI</th><th>NO</th><th>JASA</th><th>HARGA</th><th>JUMLAH</th><th>TOTAL</th></tr></thead><tbody>'
					$.ajax({
						url: '<?= base_url() ?>keuntungan/getDataJasa',
						method: 'post',
						data: "target=tbl_penjualan&tanggalMulai=" + tanggalMulai + "&tanggalSelesai=" + tanggalSelesai,
						dataType: 'json',
						success: function(data) {
							for (let i = 0; i < data.length; i++) {
								totalKeuntungan += parseInt(data[i][4])
								tabel += '<tr>'
								tabel += '<td><button type="button" title="edit" class="btn btn-link btn-primary btn-lg" id="edit' + data[i].id_jasa + '" onClick="tryEdit(' + data[i][0] + ')"><i class="fa fa-edit"></i></button></td>'
								tabel += '<td>' + (i + 1) + '</td>'
								tabel += '<td>' + data[i][1] + '</td>'
								tabel += '<td>' + formatRupiah(data[i][2].toString()) + '</td>'
								tabel += '<td>' + data[i][3] + '</td>'
								tabel += '<td>' + formatRupiah(data[i][4].toString()) + '</td>'
								tabel += '</tr>'

							}
							tabel += '</tbody></table>'
							$("#tempat_tabel").html(tabel)
							$("#keuntungan").html('Rp. ' + formatRupiah(totalKeuntungan.toString()))
							$('#add-row').DataTable({
								"pageLength": 5,
							});
						}
					});
				}

				function formatTanggal(tanggal) {
					var now = new Date(tanggal);
					var day = ("0" + now.getDate()).slice(-2);
					var month = ("0" + (now.getMonth() + 1)).slice(-2);
					var today = now.getFullYear() + "-" + (month) + "-" + (day);
					return today
				}

				function eksport() {
					var target = ""
					var jenisLaporan = $("#jenisLaporan").val();
					if (jenisLaporan == "1") {
						target = "vw_penjualan"
					} else {
						target = "vw_penjualan_jasa"
					}
					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()

					if (tanggalMulai > tanggalSelesai) {
						$("#pesanError").html("Tanggal Mulai tidak Boleh Melebihi tanggal Selesai")
					} else {
						$("#pesanError").html("")
						window.location.href = '<?= base_url() ?>keuntungan/eksport?target=' + target + '&tanggalMulai=' + tanggalMulai + '&tanggalSelesai=' + tanggalSelesai
						$("#judulTanggal").html("Tanggal : " +
							tanggalMulai + " Sampai " + tanggalSelesai)
					}
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

				function tryEdit(id) {
					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()
					$("#edit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
					$.ajax({
						url: '<?= base_url() ?>keuntungan/get_dataByidJasa',
						method: 'post',
						data: "target=vw_penjualan_jasa&id=" + id + "&kondisi=id_jasa&tanggalMulai=" + tanggalMulai + "&tanggalSelesai=" + tanggalSelesai,
						dataType: 'json',
						success: function(data) {
							var html = '';
							var statusHutang = ''
							for (var i = 0; i < data.length; i++) {
								if (data[i].status_piutang == 0) {
									statusHutang = "Hutang"
								} else if (data[i].status_piutang == 1) {
									statusHutang = "Lunas"
								} else {
									statusHutang = "Cash"
								}
								html += '<tr>' +
									'<td><button type="button" title="hapus?" class="btn btn-link btn-danger" id="hapusJasa' + data[i].id_penjualan_jasa + '" onClick="hapusJasa(' + data[i].id_penjualan_jasa + ',' + id + ')"><i class="fa fa-times"></i></button></td>' +
									'<td>' + (i + 1) + '</td>' +
									'<td>' + data[i].tgl_transaksi + '</td>' +
									'<td>' + data[i].nama_jasa + '</td>' +
									'<td>' + formatRupiah(data[i].harga_jasa.toString()) + '</td>' +
									'<td> ' + statusHutang + ' </td>' +
									'<td>' + data[i].nama + '</td>' +
									'</tr>';
							}
							$("#myList").html(html);

							$("#detailModal").modal('show')
							$("#edit" + id).html('<i class="fa fa-edit"></i>')
						}
					});
				}

				function tryHapus(id) {
					$("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
					$.ajax({
						url: '<?= base_url() ?>keuntungan/get_dataByid',
						method: 'post',
						data: "target=vw_penjualan&id=" + id + "&kondisi=id_penjualan",
						dataType: 'json',
						success: function(data) {
							$("#id_hapus").val(id)
							$("#teksHapus").html("yakin ingin menghapus penjualan <b>'" + data.nama_barang + "'</b> dengan Merk <b>'" + data.merk_barang + "'</b> dengan jenis <b>'" + data.jenis + "'</b> kode <b>(" + data.kode_barang + ")</b> transaksi pada tanggal <b>'" + data.tgl_transaksi + "'</b> ?")

							$("#hapus" + id).html('<i class="fa fa-times"></i>')
						}
					});
					$("#hapus_modal").modal('show')
				}

				function hapusJasa(id, idTransaksi) {
					var konfirmasi = confirm("apakah anda yakin ingin menghapus data terpilih ?");
					if (konfirmasi) {
						$("#hapusJasa" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
						$.ajax({
							url: '<?= base_url() ?>keuntungan/hapus_data',
							method: 'post',
							data: "id=" + id + "&jenis=jasa",
							dataType: 'json',
							success: function(data) {
								console.log(data)
								$("#hapusJasa" + id).html('<i class="fa fa-times"></i>')
								tryEdit(idTransaksi)
								jasaByDate()
							}
						});
					}
				}

				function hapus() {
					$("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					var id = $("#id_hapus").val()
					$.ajax({
						url: '<?= base_url() ?>keuntungan/hapus_data',
						method: 'post',
						data: "id=" + id + "&jenis=barang",
						dataType: 'json',
						success: function(data) {
							$("#id_hapus").val("")
							$("#teksHapus").html("")
							tampilkan()
							$("#hapus_modal").modal('hide')
							$("#hapus").html('Hapus')
						}
					});
				}
			</script>