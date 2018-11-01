@extends('template.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">profile</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah</a></li>
                <li class="breadcrumb-item active">profile</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
      <!-- /# row -->
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-title">
                      <h4>Tambah profile</h4>

                  </div>
                  <div class="card-body">
                      <div class="basic-elements">
                          <form action="{{ route('profile.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                              <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Restaurant<span style="color:red;"> *</span></label>
                                        <input type="text"name="nama_restaurant" class="form-control" value="{{ old('nama_restaurant') }}" required />
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('nama_restaurant'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('nama_restaurant')}}
                                          @endif
                                        </p>
                                    </div>
                                      <div class="form-group">
                                          <label>Akreditasi<span style="color:red;"> *</span></label>
                                          <select class="form-control" name="akreditasi" required />
                                            <option selected="true" disabled="disabled" value="{{ old('akreditasi') }}">Pilih</option>
                                            <option value="Bintang 1">Bintang 1</option>
                                            <option value="Bintang 2">Bintang 2</option>
                                            <option value="Bintang 3">Bintang 3</option>
                                            <option value="Bintang 4">Bintang 4</option>
                                            <option value="Bintang 5">Bintang 5</option>
                                        </select>
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('akreditasi'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('akreditasi')}}
                                          @endif
                                        </p>
                                      </div>
                                      <label>Gambar Restaurant<span style="color:red;"> *</span></label>
                                      <div class="form-group dropzone">
                                          <input class="form-control" name="image" type="file" value="{{ old('image') }}" multiple/>
                                      </div>
                                      <p style="color:red;font-size:13px;">
                                        @if($errors->has('image'))
                                        <i class="fa fa-exclamation-circle"></i> {{$errors->first('image')}}
                                        @endif
                                      </p>
                                      <div class="form-group">
                                          <label>Waktu Buka<span style="color:red;"> *</span></label>
                                          <input type="text" name="waktu_buka" class="form-control" value="{{ old('waktu_buka') }}" required />
                                          <p style="color:red;font-size:13px;">
                                            @if($errors->has('waktu_buka'))
                                            <i class="fa fa-exclamation-circle"></i> {{$errors->first('waktu_buka')}}
                                            @endif
                                          </p>
                                      </div>
                                      <div class="form-group">
                                        <label>Alamat<span style="color:red;"> *</span></label>
                                        <textarea style="border-color:lightgrey;" name="alamat" rows="8" cols="58" required /></textarea>
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('alamat'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('alamat')}}
                                          @endif
                                        </p>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Restaurant<span style="color:red;"> *</span></label>
                                        <input type="text" name="jenis_restaurant" class="form-control" value="{{ old('jenis_restaurant') }}" required />
                                          <p style="color:red;font-size:13px;">
                                            @if($errors->has('jenis_restaurant'))
                                            <i class="fa fa-exclamation-circle"></i> {{$errors->first('jenis_restaurant')}}
                                            @endif
                                          </p>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telpon<span style="color:red;"> *</span></label>
                                        <div class="input-group input-group-default">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-outline m-b-10" style="border-color:#e7e7e7;padding-bottom:7px;cursor:default;">+62</span>
                                            </span>
                                            <input type="number" min="0" name="no_telp" class="form-control" value="{{ old('no_telp') }}" required />
                                            <p style="color:red;font-size:13px;">
                                            @if($errors->has('no_telp'))
                                                <i class="fa fa-exclamation-circle"></i> {{$errors->first('no_telp')}}
                                            @endif
                                        </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span style="color:red;"> *</span></label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" required />
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('email'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('email')}}
                                          @endif
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Tutup<span style="color:red;"> *</span></label>
                                        <input type="text" name="waktu_tutup" class="form-control" value="{{ old('waktu_tutup') }}" required />
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('waktu_tutup'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('waktu_tutup')}}
                                          @endif
                                        </p>
                                    </div>
                                    <div class="form-group">
                                      <input type="hidden" name="status" value="tersedia">
                                    </div>
                                  </div>
                              </div>
                              <div class="dt-buttons">
                                <div class="sweetalert m-t-15">
                                  <button class="btn btn-info btn sweet-success" type="submit">Submit</button>
                                </div>
                              </div>
                          </form>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>
@endsection
