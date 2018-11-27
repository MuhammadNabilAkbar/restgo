@extends('template.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">profile</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">profile</a></li>
                <li class="breadcrumb-item active">Create</li>
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
                      <h4>Info Umum</h4>

                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Nama Restaurant:</label><br>
                            <h4>{{ $profile->nama_restaurant }}</h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Akreditasi:</label><br>
                            <h4>{{ $profile->akreditasi }}</h4>
                          </div>
                          <div class="form-group">
                            <label style="font-weight:bold;">Jenis Restaurant:</label><br>
                            <h4>{{ $profile->jenis_restaurant }}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <hr class="style">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Featured Image:</label><br>
                            @if($profile->image)
                              <img src="{{asset('images/'.$profile->image)}}" alt="logo" height="150" width="200">
                            @else
                              <p>Ga ada</p>
                            @endif
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">No Telpon:</label><br>
                            <h4>{{ $profile->no_telp }}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <hr class="style">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Buka:</label><br>
                            <h4>{{ $profile->waktu_buka }}</h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Tutup:</label><br>
                            <h4>{{ $profile->waktu_tutup }} </h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Email:</label><br>
                            <h4>{{ $profile->email }}</h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Alamat:</label><br>
                            <h4>{{ $profile->alamat }}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <hr class="style">
                        </div>
                      </div>
                      <div class="dt-buttons">
                        <div class="sweetalert m-t-15">
                            <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-warning btn-md m-b-10 m-l-5" name="button">Edit</a>
                        </div>
                      </div>
                      <div class="dt-buttons">
                        <div class="sweetalert m-t-15">
                            <a href="{{ route('profile.index') }}" class="btn btn-primary btn-md m-b-10 m-l-5" name="button">Back</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>
@endsection
