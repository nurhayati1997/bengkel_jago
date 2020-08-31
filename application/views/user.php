		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">User Management</h2>

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
										<img src="<?= base_url() ?>assets/img/logo_user.jpg" alt="..." class="avatar-img rounded-circle">
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="user-profile text-center">
									<div class="name">User Management</div>
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
															Identitas Client</span>
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
																	<label for="pillSelect">Kode User</label>
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
																	<label for="pillInput">Nama User</label>
																	<input type="text" class="form-control input-pill" id="pillInput" placeholder="Nama">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group">
																	<label for="pillInput">Alamat</label>
																	<input type="text" class="form-control input-pill" id="pillInput" placeholder="Alamat">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="pillInput">KTP</label>
																	<input type="text" class="form-control input-pill" id="pillInput" placeholder="No KTP">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="pillInput">No Hp</label>
																	<input type="text" class="form-control input-pill" id="pillInput" placeholder="No Hp">
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

									<div class="table-responsive" id="tabel_user">

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row">
					</div> -->
				</div>
			</div>
			<script>
				var baris = '<table id="add-row" class="display table table-striped table-hover" ><thead><tr><th>NO</th><th>KODE USER</th><th>NAMA USER</th><th>RULE</th><th style="width: 10%">Action</th></tr></thead><tbody>'
				$.ajax({
					url: '<?= base_url() ?>user_control/get_data',
					method: 'post',
					data: "target=tbl_pengguna",
					dataType: 'json',
					success: function(data) {
						for (let i = 0; i < data.length; i++) {
							baris += '<tr>'
							baris += '<td>' + (i + 1) + '</td>'
							baris += '<td>' + data[i].id_pengguna + '</td>'
							baris += '<td>' + data[i].nama + '</td>'
							baris += '<td>' + data[i].rule + '</td>'
							baris += '<td><div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><i class="fa fa-edit"></i></button><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></button></div></td></tr>'
						}
						baris += '</tbody></table>'
						$("#tabel_user").html(baris)
					}
				});
			</script>