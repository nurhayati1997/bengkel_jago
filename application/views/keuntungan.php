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
									</div>
									<a href="#" class="btn btn-primary btn-border btn-lg w-75 fw-bold mb-3" onclick="tampilkanByDate()">Proses</a>
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
										<h4 class="card-title">Data Transaksi</h4>
										<!-- <a class="btn btn-primary btn-border btn-round mr-2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Hutang</a> -->
										<button class="btn btn-succes btn-round ml-auto" data-toggle="collapse" href="#collapseExample">
											<i class="fas fa-share "></i>
											Action
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="collapse" id="collapseExample">
										<div class="card card-body">
											<div class="row">
												<div class="col-sm-4">
													<button class="btn btn-warning btn-round ml-auto">
														<i class="fas fa-cogs">Barang</i>
													</button>
												</div>
												<div class="col-sm-4">
													<button class="btn btn-warning btn-round ml-auto">
														<i class="fas fa-car">Jasa Service</i>
													</button>
												</div>
												<div class="col-sm-4">
													<button class="btn btn-primary btn-round ml-auto" onclick="eksport()">
														<i class="fas fa-print">Cetak</i>
													</button>
												</div>
											</div>
										</div>
									</div>
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
															<h4 class="card-title" id="keuntungan">Rp. 3.000.000</h4>
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
			</div>

			<script src="<?= base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>
			<script>
				var keuntungan = []
				var hari = []
				$.ajax({
					url: '<?= base_url() ?>keuntungan_control/keuntunganMingguan',
					method: 'post',
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


				tampilkan()

				function tampilkan() {
					var now = new Date();
					var day = ("0" + now.getDate()).slice(-2);
					var month = ("0" + (now.getMonth() + 1)).slice(-2);
					var today = now.getFullYear() + "-" + (month) + "-" + (day);

					$("#tanggalMulai").val(today)
					$("#tanggalSelesai").val(today)
					tampilkanByDate()
				}

				function tampilkanByDate() {
					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()
					var keuntungan = 0;
					var totalKeuntungan = 0;
					var tabel = '<table id="add-row" class="display table table-striped table-hover" ><thead><tr><th>NO</th><th>TANGGAL</th><th>KODE</th><th>NAMA</th><th>MERK</th><th>KULAK</th><th>JUAL</th><th>QUANTITY</th><th>TOTAL</th><th>UNTUNG</th><th>KASIR</th></tr></thead><tbody>'
					$.ajax({
						url: '<?= base_url() ?>keuntungan_control/get_data',
						method: 'post',
						data: "target=tbl_penjualan&tanggalMulai=" + tanggalMulai + "&tanggalSelesai=" + tanggalSelesai,
						dataType: 'json',
						success: function(data) {
							for (let i = 0; i < data.length; i++) {
								keuntungan = ((data[i].harga_jual - data[i].harga_kulak) * data[i].jumlah_penjualan)
								totalKeuntungan += keuntungan
								tabel += '<tr>'
								tabel += '<td>' + (i + 1) + '</td>'
								tabel += '<td>' + formatTanggal(data[i].tgl_transaksi) + '</td>'
								tabel += '<td>' + data[i].kode_barang + '</td>'
								tabel += '<td>' + data[i].nama_barang + '</td>'
								tabel += '<td>' + data[i].merk_barang + '</td>'
								tabel += '<td>' + formatRupiah(data[i].harga_kulak) + '</td>'
								tabel += '<td>' + formatRupiah(data[i].harga_jual) + '</td>'
								tabel += '<td>' + data[i].jumlah_penjualan + '</td>'
								tabel += '<td>' + formatRupiah((data[i].harga_jual * data[i].jumlah_penjualan).toString()) + '</td>'
								tabel += '<td>' + formatRupiah(keuntungan.toString()) + '</td>'
								tabel += '<td>' + data[i].nama + '</td>'
								tabel += '</tr>'
							}
							tabel += '</tbody></table>'
							$("#tempat_tabel").html(tabel)
							$("#keuntungan").html('Rp. ' + totalKeuntungan)
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
					var tanggalMulai = $("#tanggalMulai").val()
					var tanggalSelesai = $("#tanggalSelesai").val()
					window.location.href = '<?= base_url() ?>keuntungan_control/eksport?tanggalMulai=' + tanggalMulai + '&tanggalSelesai=' + tanggalSelesai
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