@extends('template.layouts.app')
@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-outline-primary">
                    <div class="card-header">
                    	<h4 class="m-b-0 text-white">Sample form</h4>
                    </div>
                            
                    <div class="card-body">
                        <form action="{{ url('pegawai/update') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

                        <div class="form-body">
                            <h3 class="card-title m-t-15">Person Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                	<input type="hidden" name="id" value="{{$pegawai->id}}">

                                <div class="form-group">
                                    <label class="control-label">Nama Pegawai</label>
                                    <input type="text" class="form-control" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}">
                             	</div>

                                <div class="form-group">
                                    <label class="control-label">Umur Pegawai</label>
                                    <input type="number" class="form-control" name="umur_pegawai" value="{{$pegawai->umur_pegawai}}">
                                </div>

                                <div class="form-group">
                                   	<label class="control-label">Jenis Kelamin</label>
                                    <select class="form-control custom-select" name="jenis_kelamin" value="{{$pegawai->jenis_kelamin}}">
                                        <option disabled>++Pilih++</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                            	
                                <div class="form-group">
                                    <label class="control-label">Foto Pegawai</label><br>
									<input type="file" name="foto_pegawai">  
                                </div>


                                <div class="form-group">
                                    <label class="control-label">Alamat</label><br>
                                    <textarea style="width: 100%;" cols="30" rows="5" type="text" name="alamat">{{$pegawai->alamat}}</textarea>
                                </div>


                            	</div>
                            </div>        
                        </div>

                        <div class="form-actions">
                           <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                           <button type="button" class="btn btn-inverse">Cancel</button>
                       	</div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
	

	