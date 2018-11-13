@extends('template.layouts.app')
@section('content')
<div class="col-md-12 mt-5">
	<div class="card card-outline-primary">
		<div class="card-header">
			<h4 class="m-b-0 text-white"><center>Form Edit Minuman</center></h4>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('minuman.update') }}" aria-label="{{ __('Edit Minuman') }}" enctype="multipart/form-data">
				@csrf
				<div class="form-body">
					<h3 class="card-title m-t-15">Person Info</h3>
					<hr>
					<div clas="row p-t-20">
						<div class="col-md-6">
							<div class="form-group">
							
								<label class="control-label">Nama Minuman</label>
								<input type="text" id="firstName" class="form-control" name="minuman" placeholder="Masukan Nama Minuman" value="{{$minuman->nama_minuman}}">
								<small class="form-control-feedback"></small> </div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="control-label">Harga</label>
									<input type="text" id="lastName" class="form-control form-control-danger" value="{{$minuman->harga}}" name="harga" placeholder="Masukan Harga Makanan">
									<small class="form-control-feedback"></small> </div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-success">
										<label class="control-label">Pilih Jenis Minuman</label>
										<select class="form-control custom-select" name="kategori">
											<option value="Berat">Berat</option>
											<option value="Ringan">Ringan</option>
										</select>
										<small class="form-control-feedback"> Pilih jenis makanan </small> </div>
									</div>
									<!--/span-->
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="comment">Deksripsi:</label>
											<textarea class="form-control" style="height: 100px" rows="5" name="deksripsi" id="comment">{{$minuman->deksripsi}}</textarea>
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
							<input type="hidden" name="id" value="{{$minuman->id}}">
								<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
								<button type="button" class="btn btn-inverse">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endsection