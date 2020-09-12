		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Client</h2>

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
										<img src="<?= base_url() ?>assets/img/service.jpg" alt="..." class="avatar-img rounded-circle">
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="user-profile text-center">
									<div class="name">Data Client</div>
									<button class="btn btn-primary btn-round ml-auto" onclick="tryTambah()">
										<i class="fa fa-plus"></i>
										Tambah Client
									</button>
								</div>
								<div class="card-footer">
									<!-- Modal -->
									<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
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
													<small class="text-danger" id="pesan_error"></small>
													<form>
														<input type="hidden" id="id_client" name="id_client" />
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	<label for="nama">Nama Client</label>
																	<input type="text" class="form-control input-pill" id="nama" name="nama" placeholder="Nama">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group">
																	<label for="alamat">Alamat</label>
																	<input type="text" class="form-control input-pill" id="alamat" name="alamat" placeholder="Alamat">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="no_ktp">KTP</label>
																	<input type="text" class="form-control input-pill" id="no_ktp" name="no_ktp" placeholder="No KTP">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="no_hp">No Hp</label>
																	<input type="text" class="form-control input-pill" id="no_hp" name="no_hp" placeholder="No Hp">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="tambah" onClick="tambah()" class="btn btn-primary">Tambah</button>
													<button type="button" id="edit" onClick="edit()" class="btn btn-primary">Edit</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
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
															Client
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
													<button type="button" id="edit" onClick="hapus()" class="btn btn-primary">Hapus</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive" id="tempat_tabel">
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
				tampilkan()

				function tampilkan() {
					var tabel = '<table id="add-row" class="display table table-striped table-hover" ><thead><tr><th>NO</th><th>KODE CLIENT</th><th>NAMA CLIENT</th><th>ALAMAT</th><th>NO KTP</th><th>NO HP</th><th style="width: 10%">Action</th></tr></thead><tbody>'
					$.ajax({
						url: '<?= base_url() ?>client/get_data',
						method: 'post',
						data: "target=tbl_client",
						dataType: 'json',
						success: function(data) {
							for (let i = 0; i < data.length; i++) {
								tabel += '<tr>'
								tabel += '<td>' + (i + 1) + '</td>'
								tabel += '<td>' + data[i].id_client + '</td>'
								tabel += '<td>' + data[i].nama_client + '</td>'
								tabel += '<td>' + data[i].alamat + '</td>'
								tabel += '<td>' + data[i].no_ktp + '</td>'
								tabel += '<td>' + data[i].no_telp + '</td>'
								tabel += '<td><div class="form-button-action"><button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg" onClick="tryEdit(' + data[i].id_client + ')"><i class="fa fa-edit"></i></button><button type="button" title="hapus ?" class="btn btn-link btn-danger"><i class="fa fa-times" onClick="tryHapus(' + data[i].id_client + ')"></i></button></div></td></tr>'
							}
							tabel += '</tbody></table>'
							$("#tempat_tabel").html(tabel)
						}
					});
				}


				function tryTambah() {
					$("#nama").val("")
					$("#alamat").val("")
					$("#no_ktp").val("")
					$("#no_hp").val("")
					$("#modal_tambah").modal('show')
					$("#tambah").show()
					$("#edit").hide()
					$('#pesan_error').html("")
				}

				function tambah() {
					var nama = $("#nama").val()
					var alamat = $("#alamat").val()
					var no_ktp = $("#no_ktp").val()
					var no_hp = $("#no_hp").val()
					$.ajax({
						url: '<?= base_url() ?>client/tambah_data',
						method: 'post',
						data: "target=tbl_client&nama=" + nama + "&alamat=" + alamat + "&no_ktp=" + no_ktp + "&no_hp=" + no_hp,
						dataType: 'json',
						success: function(data) {
							if (data == "") {
								$("#modal_tambah").modal('hide')
								tampilkan()
								$("#nama").val("")
								$("#alamat").val("")
								$("#no_ktp").val("")
								$('#no_hp').val("")
							} else {
								$('#pesan_error').html(data)
							}

						}
					});
				}

				function tryEdit(id) {
					$("#edit").show()
					$("#id_client").val(id)
					$("#tambah").hide()
					$("#no_ktp").prop('disabled', true)
					$.ajax({
						url: '<?= base_url() ?>client/get_dataByid',
						method: 'post',
						data: "target=tbl_client&id=" + id,
						dataType: 'json',
						success: function(data) {
							$('#pesan_error').html("")
							$("#nama").val(data.nama_client)
							$("#alamat").val(data.alamat)
							$("#no_ktp").val(data.no_ktp)
							$("#no_hp").val(data.no_telp)
							$("#modal_tambah").modal('show')
						}
					});
				}

				function edit() {
					var id = $("#id_client").val()
					var nama = $("#nama").val()
					var alamat = $("#alamat").val()
					var no_hp = $("#no_hp").val()
					$.ajax({
						url: '<?= base_url() ?>client/ubah_data',
						method: 'post',
						data: "target=tbl_client&id=" + id + "&nama=" + nama + "&alamat=" + alamat + "&no_hp=" + no_hp,
						dataType: 'json',
						success: function(data) {
							if (data == "") {
								$("#modal_tambah").modal('hide')
								tampilkan()
								$("#id_user").val("")
								$("#nama").val("")
								$("#alamat").val("")
								$("#no_ktp").val("")
								$("#no_hp").val("")
								$('#pesan_error').html("")
							} else {
								$('#pesan_error').html(data)
							}
						}
					});
				}

				function tryHapus(id) {
					$.ajax({
						url: '<?= base_url() ?>client/get_dataByid',
						method: 'post',
						data: "target=tbl_client&id=" + id,
						dataType: 'json',
						success: function(data) {
							$("#id_hapus").val(id)
							$("#teksHapus").html("apakah anda yakin ingin menghapus client dengan nama '" + data.nama_client + "' ?")
						}
					});
					$("#hapus_modal").modal('show')
				}

				function hapus() {
					var id = $("#id_hapus").val()
					$.ajax({
						url: '<?= base_url() ?>client/hapus_data',
						method: 'post',
						data: "target=tbl_client&id=" + id,
						dataType: 'json',
						success: function(data) {
							$("#id_hapus").val("")
							$("#teksHapus").html("")
							tampilkan()
							$("#hapus_modal").modal('hide')
						}
					});
				}
			</script>