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
															<input type="text" class="form-control input-pill" id="kode" placeholder="">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jenis">Jenis Barang</label>
															<select class="form-control input-pill" id="jenis" placeholder="">
																<option value="0">Sepeda Motor</option>
																<option value="1">Mobil</option>
															</select>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group">
															<label for="nama">Nama Barang</label>
															<input type="text" class="form-control input-pill" id="nama" placeholder="barang">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="distributor">Distributor</label>
															<input type="text" class="form-control input-pill" id="distributor" placeholder="">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="satuan">Harga Satuan</label>
															<input type="number" min="0" class="form-control input-pill" id="satuan" placeholder="Rp">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jual">Harga jual</label>
															<input type="number" min="0" class="form-control input-pill" id="jual" placeholder="Rp">
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer no-bd">
											<button onclick="tambah()" type="button" class="btn btn-primary">Tambah</button>
											<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
										</div>
									</div>
								</div>
							</div>

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>NO</th>
											<th>KODE BARANG</th>
											<th>JENIS BARANG</th>
											<th>NAMA BARANG</th>
											<th>STOK</th>
											<th>DISTRIBUTOR</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<!-- <tfoot>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
										</tr>
									</tfoot> -->
									<tbody>
										<tr>
											<td>1</td>
											<td>008</td>
											<td>Edinburgh</td>
											<td>61</td>
											<td>2011/04/25</td>
											<td>$320,800</td>
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
											<td>2</td>
											<td>987</td>
											<td>Tokyo</td>
											<td>63</td>
											<td>2011/07/25</td>
											<td>$170,750</td>
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
											<td>3</td>
											<td>876</td>
											<td>San Francisco</td>
											<td>66</td>
											<td>2009/01/12</td>
											<td>$86,000</td>
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
											<td>4</td>
											<td>867</td>
											<td>Edinburgh</td>
											<td>22</td>
											<td>2012/03/29</td>
											<td>$433,060</td>
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
											<td>5</td>
											<td>005</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
											<td>$162,700</td>
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
											<td>6</td>
											<td>342</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
											<td>$372,000</td>
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
											<td>7</td>
											<td>864</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
											<td>$137,500</td>
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
											<td>8</td>
											<td>987</td>
											<td>Tokyo</td>
											<td>55</td>
											<td>2010/10/14</td>
											<td>$327,900</td>
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
											<td>9</td>
											<td>543</td>
											<td>San Francisco</td>
											<td>39</td>
											<td>2009/09/15</td>
											<td>$205,500</td>
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
											<td>10</td>
											<td>822</td>
											<td>Edinburgh</td>
											<td>23</td>
											<td>2008/12/13</td>
											<td>$103,600</td>
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
		</div>
	</div>
</div>
<script>
	function tambah() {
		if (document.getElementById("jual").value == "") {
			document.getElementById("jual").focus();
		}
		if (document.getElementById("satuan").value == "") {
			document.getElementById("satuan").focus();
		}
		if (document.getElementById("distributor").value == "") {
			document.getElementById("distributor").focus();
		}
		if (document.getElementById("kode").value == "") {
			document.getElementById("kode").focus();
		}
		if (document.getElementById("nama").value == "") {
			document.getElementById("nama").focus();
		}
		if (document.getElementById("jenis").value == "") {
			document.getElementById("jenis").focus();
		}
		if (document.getElementById("kode").value == "") {
			document.getElementById("kode").focus();
		} else {
			// console.log("sukses");
			$.ajax({
				type: 'POST',
				data: 'table=' + 'tbl_barang',
				url: '<?= base_url() ?>barang_control/tambah',
				dataType: 'json',
				success: function(data) {
					console.log(data);
				}
			});
		}
		// console.log(document.getElementById("kode").value);
	}
</script>