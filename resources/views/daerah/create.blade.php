@extends('template.layouts.app')

@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Daerah</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Daerah</li>
                    </ol>
                </div>
            </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Daerah</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">                                    
                                        <div class="row">
                                        	<form action="{{ url('daerah/post') }}" method="POST" class="col-12" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input class="form-control" type="text" name="nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Provinsi</label>
                                                    <input class="form-control" type="text" name="provinsi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea name="alamat" class="textarea_editor form-control" rows="15" style="height:200px" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
                                                </div>                                                

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Kecamatan</label>
                                                    <input class="form-control" type="text" name="kecamatan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kelurahan</label>
                                                    <input class="form-control" type="text" name="kelurahan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kota</label>
                                                    <input class="form-control" type="text" name="kota" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>                                                
                                            </div>
                                            &nbsp&nbsp&nbsp&nbsp
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </form>
                                        </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
@endsection