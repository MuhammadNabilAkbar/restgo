@extends('template.layouts.app')
@section('content')
<div class="col-md-12 mt-5">
	<div class="card card-outline-primary">
		<div class="card-header">
			<h4 class="m-b-0 text-white"><center>Form Tambah Makanan</center></h4>
		</div>
		<div class="card-body">
			<form action="#">
				<div class="form-body">
					<h3 class="card-title m-t-15">Person Info</h3>
					<hr>
					<div class="row p-t-20">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Nama Makanan</label>
								<input type="text" id="firstName" class="form-control" placeholder="Masukan Nama Makanan">
								<small class="form-control-feedback"></small> </div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="control-label">Harga</label>
									<input type="text" id="lastName" class="form-control form-control-danger" placeholder="Masukan Harga Makanan">
									<small class="form-control-feedback"></small> </div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-success">
									<label class="control-label">Pilih Jenis Makanan</label>
										<select class="form-control custom-select">
											<option value="">Berat</option>
											<option value="">Ringan</option>
										</select>
										<small class="form-control-feedback"> Pilih jenis makanan </small> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Level Pedas</label>
											<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
												<option value="Category 1">Category 1</option>
												<option value="Category 2">Category 2</option>
												<option value="Category 3">Category 5</option>
												<option value="Category 4">Category 4</option>
											</select>
										</div>
									</div>
									<!--/span-->
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Category</label>
											<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
												<option value="Category 1">Category 1</option>
												<option value="Category 2">Category 2</option>
												<option value="Category 3">Category 5</option>
												<option value="Category 4">Category 4</option>
											</select>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="form-actions">
								<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
								<button type="button" class="btn btn-inverse">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endsection