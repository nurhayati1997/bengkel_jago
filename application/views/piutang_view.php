			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Piutang</h2>
						
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
										<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Data Piutang</h4>
										<!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Tambah Data
										</button> -->
								</div>
								<div class="card-footer">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">Rician</span> 
														<span class="fw-light">Hutang</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
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
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>NO</th>
													<th>NAMA CLIENT</th>
													<th>TOTAL</th>
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
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>987</td>
													<td>Tokyo</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>876</td>
													<td>San Francisco</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>867</td>
													<td>Edinburgh</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>005</td>
													<td>Tokyo</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>342</td>
													<td>New York</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>864</td>
													<td>San Francisco</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>8</td>
													<td>987</td>
													<td>Tokyo</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>9</td>
													<td>543</td>
													<td>San Francisco</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
															</button>	
														</div>
													</td>
												</tr>
												<tr>
													<td>10</td>
													<td>822</td>
													<td>Edinburgh</td>
													<td>
														<div class="form-button-action">
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																Rincian
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