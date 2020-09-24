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
									<button class="btn btn-primary btn-round ml-auto" onclick="tryTambah()">
										<i class="fa fa-plus"></i>
										Tambah
									</button>
								</div>
								<div class="card-footer">
									<!-- Modal -->
									<div class="modal fade" id="tambah_modal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
															Identitas</span>
														<span class="fw-light">
															User
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<small class="text-danger" id="pesan_error"></small>
													<form>
														<div class="row">
															<div class="col-sm-6">
																<input type="hidden" id="id_user" name="id_user" />
																<div class="form-group">
																	<label for="pillInput">Nama</label>
																	<input type="text" id="nama" name="nama" class="form-control input-pill" id="pillInput" placeholder="Nama">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="pillSelect">Rule</label>
																	<select name="rule" id="rule" class="form-control input-pill" id="pillSelect" placeholder="Pill Input">
																		<option>1</option>
																		<option>2</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="pillInput">Password</label>
																	<input type="password" name="password" class="form-control input-pill" id="password" placeholder="">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="pillInput">Konfirmasi Password</label>
																	<input type="password" class="form-control input-pill" id="verifpass" name="verifpass" placeholder="">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="tambah" onClick="tambah()" class="btn btn-primary">Tambah</button>
													<button type="button" id="edit" onClick="edit()" class="btn btn-primary">Edit</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
									<div class="table-responsive" id="tempatTabel">

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
					$("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
					var baris = '<table id="tabelUser" class="display table table-striped table-hover" ><thead><tr><th>NO</th><th>KODE USER</th><th>NAMA USER</th><th>RULE</th><th style="width: 10%">Action</th></tr></thead><tbody>'
					$.ajax({
						url: '<?= base_url() ?>user/get_data',
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
								baris += '<td><div class="form-button-action"><button type="button" title="edit" class="btn btn-link btn-primary btn-lg" id="edit' + data[i].id_pengguna + '" onClick="tryEdit(' + data[i].id_pengguna + ')"><i class="fa fa-edit"></i></button>'
								if (data[i].id_pengguna != <?= $this->session->userdata("id_pengguna") ?>) {
									baris += '<button type="button" title="hapus?" class="btn btn-link btn-danger" id="hapus' + data[i].id_pengguna + '" onClick="tryHapus(' + data[i].id_pengguna + ')"><i class="fa fa-times"></i></button>'
								}
								baris += '</div></td></tr>'
							}
							baris += '</tbody></table>'
							$("#tempatTabel").html(baris)
							$('#tabelUser').DataTable({
								"pageLength": 5,
							});
						}
					});
				}

				function tryTambah() {
					$("#nama").val("")
					$("#password").val("")
					$("#verifpass").val("")
					$("#tambah_modal").modal('show')
					$("#tambah").show()
					$("#edit").hide()
					$("#nama").prop('disabled', false)
					$('#pesan_error').html("")
				}

				function tambah() {
					$("#tambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					var nama = $("#nama").val()
					var password = $("#password").val()
					var verifpass = $("#verifpass").val()
					var rule = $("#rule").val()
					$.ajax({
						url: '<?= base_url() ?>user/tambah_data',
						method: 'post',
						data: "target=tbl_pengguna&nama=" + nama + "&password=" + password + "&verifpass=" + verifpass + "&rule=" + rule,
						dataType: 'json',
						success: function(data) {
							if (data == "") {
								$("#tambah_modal").modal('hide')
								tampilkan()
								$("#nama").val("")
								$("#password").val("")
								$("#verifpass").val("")
								$('#pesan_error').html("")
							} else {
								$('#pesan_error').html(data)
							}
							$("#tambah").html('Tambah')

						}
					});
				}

				function tryEdit(id) {
					$("#edit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
					$("#edit").show()
					$("#id_user").val(id)
					$("#tambah").hide()
					$("#nama").prop('disabled', true)
					$.ajax({
						url: '<?= base_url() ?>user/get_dataByid',
						method: 'post',
						data: "target=tbl_pengguna&id=" + id,
						dataType: 'json',
						success: function(data) {
							$("#tambah_modal").modal('show')
							$("#nama").val(data.nama)
							$("#rule").val(data.rule)
							$("#edit" + id).html('<i class="fa fa-edit"></i>')
						}
					});
				}

				function edit() {
					$("#edit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					var password = $("#password").val()
					var id = $("#id_user").val()
					var verifpass = $("#verifpass").val()
					var rule = $("#rule").val()
					$.ajax({
						url: '<?= base_url() ?>user/ubah_data',
						method: 'post',
						data: "target=tbl_pengguna&id=" + id + "&password=" + password + "&verifpass=" + verifpass + "&rule=" + rule,
						dataType: 'json',
						success: function(data) {
							if (data == "") {
								$("#tambah_modal").modal('hide')
								tampilkan()
								$("#id_user").val("")
								$("#nama").val("")
								$("#password").val("")
								$("#verifpass").val("")
								$('#pesan_error').html("")
							} else {
								$('#pesan_error').html(data)
							}
							$("#edit").html('Edit')
						}
					});
				}

				function tryHapus(id) {
					$("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
					$.ajax({
						url: '<?= base_url() ?>user/get_dataByid',
						method: 'post',
						data: "target=tbl_pengguna&id=" + id,
						dataType: 'json',
						success: function(data) {
							$("#id_hapus").val(id)
							$("#teksHapus").html("apakah anda yakin ingin menghapus pengguna dengan nama '" + data.nama + "' ?")

							$("#hapus" + id).html('<i class="fa fa-times"></i>')
						}
					});
					$("#hapus_modal").modal('show')
				}

				function hapus() {
					$("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					var id = $("#id_hapus").val()
					$.ajax({
						url: '<?= base_url() ?>user/hapus_data',
						method: 'post',
						data: "target=tbl_pengguna&id=" + id,
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