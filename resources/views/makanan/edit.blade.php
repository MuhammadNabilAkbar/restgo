@extends('template.layouts.app')
@section('content')
<div class="col-md-12 mt-5">
	<div class="card card-outline-primary">
		<div class="card-header">
			<h4 class="m-b-0 text-white"><center>Form Edit Makanan</center></h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('makanan.update', $makanan->id)}}" aria-label="{{ __('Edit Makanan') }}" enctype="multipart/form-data">
				@csrf @method('PUT')
				<div class="form-body">
					<h3 class="card-title m-t-15">Person Info</h3>
					<hr>
					<div class="row p-t-20">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Nama Makanan</label>
								<input type="text" value="{{$makanan->nama_makanan}}" id="firstName" class="form-control" 
								name="makanan" placeholder="Masukan Nama Makanan">
								<small class="form-control-feedback"></small> </div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="control-label">Harga</label>
									<input type="text" value="{{$makanan->harga}}" id="lastName" class="form-control form-control-danger" name="harga" placeholder="Masukan Harga Makanan">
									<small class="form-control-feedback"></small> </div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-success">
										<label class="control-label">Pilih Jenis Makanan</label>
										<select class="form-control custom-select" name="kategori" value="{{$makanan->kategori}}">
											@if($makanan->kategori == 'Berat')
											<option value="Berat" selected>Berat</option>
											<option value="Ringan">Ringan</option>
											@elseif($makanan->kategori == 'Ringan')
											<option value="Berat" >Berat</option>
											<option value="Ringan" selected>Ringan</option>
											@endif
										</select>
										<small class="form-control-feedback"></small> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-success">
											<label class="control-label">Level Pedas</label>
											<select class="form-control custom-select" data-placeholder="Choose a Category"name="level" tabindex="1">
												@if($makanan->level_pedas == 'level-1')
												<option value="level-1" selected>Level 1</option>
												<option value="level-2">Level 2</option>
												<option value="level-3">Level 3</option>
												<option value="level-4">Level 4</option>
												@elseif($makanan->level_pedas == 'level-2')
												<option value="level-1" >Level 1</option>
												<option value="level-2" selected>Level 2</option>
												<option value="level-3">Level 3</option>
												<option value="level-4">Level 4</option>
												@elseif($makanan->level_pedas == 'level-3')
												<option value="level-1" >Level 1</option>
												<option value="level-2">Level 2</option>
												<option value="level-3" selected>Level 3</option>
												<option value="level-4">Level 4</option>
												@elseif($makanan->level_pedas == 'level-4')
												<option value="level-1">Level 1</option>
												<option value="level-2">Level 2</option>
												<option value="level-3">Level 3</option>
												<option value="level-4" selected>Level 4</option>
												@endif
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
											<label for="comment">Deksripsi:</label>
											<textarea class="form-control" style="height: 100px" rows="5" name="deksripsi" placeholder="Deksripsi" id="comment">{{$makanan->deksripsi}}</textarea>
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