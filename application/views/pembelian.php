		<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Pembelian</h2>
						
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">+ Penjualan</a>
								<a href="#" class="btn btn-secondary btn-round">Piutang</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-sm-12">
							<div class="card card-profile">
								<div class="card-header" style="background-image: url('<?=base_url()?>assets/img/blogpost.jpg')">
									<div class="profile-picture">
										<div class="avatar avatar-xl">
											<img src="<?=base_url()?>assets/img/pembelian.png" alt="..." class="avatar-img rounded-circle">
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="user-profile text-center">
										<div class="name">Transaksi Pembelian</div>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button>
								</div>
								<div class="card-footer">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
																	<label for="pillInput">Jumlah Pembelian</label>
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
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>NO</th>
													<th>KODE BARANG</th>
													<th>NAMA BARANG</th>
													<th>JENIS BARANG</th>
													<th>JUMLAH PEMBELIAN</th>
													<th>HARGA SATUAN</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
												<th>NO</th>
													<th>KODE BARANG</th>
													<th>NAMA BARANG</th>
													<th>JENIS BARANG</th>
													<th>JUMLAH PEMBELIAN</th>
													<th>HARGA SATUAN</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>1</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
												</tr>
												<tr>
													<td>10</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
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