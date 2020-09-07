			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>

							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row row-card-no-pd mt--2">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-chart-pie text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Jumlah Pembeli</p>
												<h4 class="card-title"><?= $jumlahBarangTerjual ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
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
												<p class="card-category">Keuntungan</p>
												<h4 class="card-title">Rp. <?= $keuntungan ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-interface-6 text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Hutang</p>
												<h4 class="card-title">Rp. <?= $hutang ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-shapes text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Belanja</p>
												<h4 class="card-title"><?= $jumlahJenisBarangTerbeli ?> Kulakan </h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Keuntungan</div>
										<div class="card-tools">
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container" style="min-height: 375px">
										<canvas id="statisticsChart"></canvas>
									</div>
									<div id="myChartLegend"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary bg-primary-gradient">
								<div class="card-body">
									<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Barang Terlaris</h4>
									<div class="card-body pb-0">
										<?php
										for ($i = 0; $i < count($terlaris); $i++) { ?>
											<div class="d-flex">
												<div class="flex-1 pt-1 ml-2">
													<h6 class="fw-bold mb-1"><?= $terlaris[$i]["nama_barang"] ?></h6>
												</div>
												<div class="d-flex ml-auto align-items-center">
													<h3 class="text-info fw-bold"><?= $terlaris[$i]["SUM(jumlah_penjualan)"] ?></h3>
												</div>
											</div>
											<div class="separator-dashed"></div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">SISA STOK</h4>
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>NO</th>
													<th>KODE</th>
													<th>NAMA</th>
													<th>MERK</th>
													<th>SISA STOK</th>
												</tr>
											</thead>

											<tbody>
												<?php for ($i = 0; $i < count($stok); $i++) { ?>
													<tr>
														<td><?= ($i + 1) ?></td>
														<td><?= $stok[$i]["kode_barang"] ?></td>
														<td><?= $stok[$i]["nama_barang"] ?></td>
														<td><?= $stok[$i]["merk_barang"] ?></td>
														<td><?= $stok[$i]["stok_barang"] ?></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
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
					url: '<?= base_url() ?>dashboard/keuntunganMingguan',
					method: 'post',
					dataType: 'json',
					success: function(data) {
						for (let i = 0; i < data.length; i++) {
							keuntungan.push(data[i][1])
							hari.push(data[i][0])
						}

						var ctx = document.getElementById('statisticsChart').getContext('2d');

						var statisticsChart = new Chart(ctx, {
							type: 'line',
							data: {
								labels: hari,
								datasets: [{
									label: "Keuntungan",
									borderColor: '#177dff',
									pointBackgroundColor: 'rgba(23, 125, 255, 0.6)',
									pointRadius: 0,
									backgroundColor: 'rgba(23, 125, 255, 0.4)',
									legendColor: '#177dff',
									fill: true,
									borderWidth: 2,
									data: keuntungan
								}]
							},
							options: {
								responsive: true,
								maintainAspectRatio: false,
								legend: {
									display: false
								},
								tooltips: {
									bodySpacing: 4,
									mode: "nearest",
									intersect: 0,
									position: "nearest",
									xPadding: 10,
									yPadding: 10,
									caretPadding: 10
								},
								layout: {
									padding: {
										left: 5,
										right: 5,
										top: 15,
										bottom: 15
									}
								},
								scales: {
									yAxes: [{
										ticks: {
											fontStyle: "500",
											beginAtZero: false,
											maxTicksLimit: 5,
											padding: 10
										},
										gridLines: {
											drawTicks: false,
											display: false
										}
									}],
									xAxes: [{
										gridLines: {
											zeroLineColor: "transparent"
										},
										ticks: {
											padding: 10,
											fontStyle: "500"
										}
									}]
								}
							}
						});
					}
				});
			</script>