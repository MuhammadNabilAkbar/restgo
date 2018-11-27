@extends('template.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Profile</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <a href="{{route('profile.create') }}" class="btn btn-info btn-rounded" name="button">Tambah profile</a>
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Nama Restaurant</th>
                                      <th>Akreditasi</th>
                                      <th>Foto</th>
                                      <th>Jenis Restaurant</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($profile as $profiles)
                                  <tr>
                                      <td><a href="{{ route('profile.show',$profiles->id) }}">{{ $profiles->nama_restaurant }}</a></td>
                                      <td>{{ $profiles->akreditasi }}</td>
                                      <td>
                                        @if($profiles->image)
                                        <img src="{{asset('images/'.$profiles->image)}}" alt="logo" height="50" width="50" style="display:block;margin-left:auto;margin-right:auto;">
                                      @else
                                        <p>Ga ada</p>
                                      @endif
                                    </td>
                                    <td>{{ $profiles->jenis_restaurant }}</td>
                                      <td>
                                        <a href="{{ route('profile.edit', $profiles->id) }}" class="btn btn-warning btn-rounded" name="button"> Edit </a>
                                        <form action="{{ route('profile.destroy', $profiles->id) }}" method="POST" style="display:inline-block !important;">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                                        </form>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
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
