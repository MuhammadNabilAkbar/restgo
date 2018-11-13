@extends('template.layouts.app')

@section('content')

<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
            	 <body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
    <div class="container-fluid spark-screen">
      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <div class="box-header">
              <center>
                
               <i class="fa fa-pencil"></i>&nbsp;Fasilitas
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                 
                  <br>
                    <table id="example23" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="text-align: center;">No </th>
                          <th style="text-align: center;">Nama Kategori</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($kategori as $key)
                        <tr>
                          <td style="text-align: center;">{{$key->id}}</td>
                          <td style="text-align: center;">{{$key->nama_kategori}}</td>
                          <td style="text-align: center;">
                            <a href="{{route('kategori.edit',[$key->id])}}" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>

                            <a href="{{route('kategori.delete',[$key->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>

@endsection