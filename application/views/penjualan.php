		<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Penjualan</h2>
						
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
										<span class="month">Barang</span>
									</div>
								</div>
								<hr>
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="pillSelect">Kode barang</label>
												<select class="form-control input-pill" id="pillSelect" placeholder="Pill Input">
													<option>001</option>
													<option>002</option>
													<option>003</option>
													<option>004</option>
													<option>005</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="pillInput">Jumlah</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="0">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="pillInput">Nama Barang</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="barang">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="pillInput">Harga satuan</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="Rp">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="pillInput">Total</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="Rp">
											</div>
										</div>
									</div>
									<a href="#" class="btn btn-success btn-border btn-lg w-75 fw-bold mb-3">Tambah</a>
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
												<label for="pillSelect">Kode Jasa</label>
												<select class="form-control input-pill" id="pillSelect" placeholder="Pill Input">
													<option>001</option>
													<option>002</option>
													<option>003</option>
													<option>004</option>
													<option>005</option>
												</select>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="pillInput">Jenis Jasa</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="barang">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="pillInput">Total</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="Rp">
											</div>
										</div>
									</div>
									<a href="#" class="btn btn-primary btn-border btn-lg w-75 fw-bold mb-3">Tambah</a>
								</form>
							</div>
						</div>
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
										<div class="card card-body">
											<form>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<label for="pillSelect">Nama Client</label>
															<select class="form-control input-pill" id="pillSelect" placeholder="Pill Input">
																<option>anu</option>
																<option>ini</option>
																<option>itu</option>
															</select>
														</div>
													</div>
												</div>
												<a href="<?= site_url('piutang_control') ?>" class="btn btn-primary btn-border btn-lg fw-bold mb-3">Tambah Hutang</a>
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
						</div>
					</div>
					<!-- <div class="row">
					</div> -->
				</div>
			</div>