		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Stok Barang</h2>

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
										<img src="<?= base_url() ?>assets/img/stok.png" alt="..." class="avatar-img rounded-circle">
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="user-profile text-center">
									<div class="name">Stok Barang</div>
								</div>
							</div>
							<div class="card-footer">
								<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
											<i class="flaticon-home"></i>
											STOK WARNING
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
											<i class="flaticon-user-4"></i>
											STOK AMAN
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-contact-tab-icon" data-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
											<i class="flaticon-mailbox"></i>
											PAGU STOK
										</a>
									</li>
								</ul>
								<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
									<div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
										<div class="table-responsive" id="tempatTabelWarning">
										</div>
									</div>
									<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
										<div class="table-responsive" id="tempatTabelAman">
										</div>
									</div>
									<div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
										<div class="table-responsive" id="tempatTabelPagu">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					</div> -->
			</div>
			<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
									Edit</span>
								<span class="fw-light">
									Pagu Barang
								</span>
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<small class="text-danger" id="pesan_error"></small>
							<form>
								<input type="hidden" id="id_barang" name="id_barang" />
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="pagu">Jumla Pagu</label>
											<input type="number" class="form-control input-pill" id="pagu" name="pagu" placeholder="Jumlah Pagu">
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer no-bd">
							<button type="button" id="edit" onClick="edit()" class="btn btn-primary">Edit</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			tampilkan()

			function tampilkan() {
				var beginTabel = 'class="display table table-striped table-hover" ><thead><tr><th>NO</th><th>KODE</th><th>NAMA</th><th>MERK</th><th>STOK</th>'
				var stokWarning = '<table id="tabelWarning" ' + beginTabel + "</thead><tbody>";
				var stokAman = '<table id="tabelAman" ' + beginTabel + "</thead><tbody>";
				var stokPagu = '<table id="tabelPagu" ' + beginTabel + '<th>PAGU</th><th style="width: 10%">Action</th></tr></thead><tbody>';
				var noWarning = 1;
				var noAman = 1;
				var baris = '';
				$.ajax({
					url: '<?= base_url() ?>stok/get_data',
					method: 'post',
					dataType: 'json',
					success: function(data) {
						for (let i = 0; i < data.length; i++) {
							baris = '<td>' + data[i].kode_barang + '</td><td>' + data[i].nama_barang + '</td><td>' + data[i].merk_barang + '</td><td>' + data[i].stok_barang + '</td>'

							if (parseInt(data[i].stok_barang) >= parseInt(data[i].pagu)) {
								stokAman += '<tr><td>' + noAman + '</td>' + baris + '</tr>'
								noAman += 1
							} else {
								stokWarning += '<tr><td>' + noWarning + '</td>' + baris + '</tr>'
								noWarning += 1
							}
							stokPagu += '<tr><td>' + (i + 1) + '</td>' + baris + ' <td> ' + data[i].pagu + ' </td><td><div class="form-button-action"><button type="button" title="edit" class="btn btn-link btn-primary btn-lg" onClick="tryEdit(' + data[i].id_barang + ')"><i class="fa fa-edit"></i > </button></div> </td></tr > '
						}
						$("#tempatTabelWarning").html(stokWarning + '</tbody></table>')
						$("#tempatTabelAman").html(stokAman + '</tbody></table>')
						$("#tempatTabelPagu").html(stokPagu + '</tbody></table>')
					}
				});
			}

			function tryEdit(id) {
				$("#id_barang").val(id)
				$.ajax({
					url: '<?= base_url() ?>stok/get_dataByid',
					method: 'post',
					data: "target=tbl_barang&id=" + id,
					dataType: 'json',
					success: function(data) {
						$('#pesan_error').html("")
						$("#pagu").val(data.pagu)
						$("#modal_edit").modal('show')
					}
				});
			}

			function edit() {
				var id = $("#id_barang").val()
				var pagu = $("#pagu").val()
				$.ajax({
					url: '<?= base_url() ?>stok/ubah_data',
					method: 'post',
					data: "target=tbl_barang&id=" + id + "&pagu=" + pagu,
					dataType: 'json',
					success: function(data) {
						if (data == "") {
							tampilkan()
							$("#id_barang").val("")
							$("#pagu").val("")
							$('#pesan_error').html("")
							$("#modal_edit").modal('hide')
						} else {
							$('#pesan_error').html(data)
						}
					}
				});
			}

			$(document).ready(function() {
				$('#basic-datatables').DataTable({});

				$('#multi-filter-select').DataTable({
					"pageLength": 5,
					initComplete: function() {
						this.api().columns().every(function() {
							var column = this;
							var select = $('<select class="form-control"><option value=""></option></select>')
								.appendTo($(column.footer()).empty())
								.on('change', function() {
									var val = $.fn.dataTable.util.escapeRegex(
										$(this).val()
									);

									column
										.search(val ? '^' + val + '$' : '', true, false)
										.draw();
								});

							column.data().unique().sort().each(function(d, j) {
								select.append('<option value="' + d + '">' + d + '</option>')
							});
						});
					}
				});

				$('#tabelWarning').DataTable({
					"pageLength": 5,
				});
				$('#tabelAman').DataTable({
					"pageLength": 5,
				});
				$('#tabelPagu').DataTable({
					"pageLength": 5,
				});

			});
		</script>