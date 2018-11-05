@extends('template.layouts.app')

@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Daerah</h3> </div>
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
                                <h4>Edit Daerah</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">                                    
                                        <div class="row">
                                        	<form action="{{ url('daerah/update') }}" class="col-sm-12" method="POST" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input class="form-control" type="text" name="nama" value="{{$edit->nama}}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Provinsi</label>
                                                    <input class="form-control" type="text" name="provinsi" value="{{$edit->provinsi}}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="textarea_editor form-control" name="alamat" rows="15" style="height:200px" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$edit->alamat}}</textarea>
                                                </div>                                                

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Kecamatan</label>
                                                    <input class="form-control" type="text" name="kecamatan" value="{{$edit->kecamatan}}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kelurahan</label>
                                                    <input class="form-control" type="text" name="kelurahan" value="{{$edit->kelurahan}}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kota</label>
                                                    <input class="form-control" type="text" name="kota" value="{{$edit->kota}}" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>                                                
                                            </div>
                                            <input type="hidden" name="id" value="{{$edit->id}}">
                                            &nbsp&nbsp&nbsp&nbsp
                                            <button type="submit" class="btn btn-primary">Edit Data</button>
                                        </form>
                                        </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
@endsection