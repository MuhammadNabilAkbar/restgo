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
                          <th style="text-align: center;">Nama Fasilitas </th>
                          <th style="text-align: center;">Jumlah</th>
                          <th style="text-align: center;">Deskripsi</th>
                          <th style="text-align: center;">action</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($fasilitas as $data)
                        <tr>
                          <td style="text-align: center;">{{ $data->id }}</td>
                          <td style="text-align: center;">{{ $data->nama }}</td>
                          <td style="text-align: center;">{{ $data->jumlah}}</td>
                          <td style="text-align: center;">{{ $data->deskripsi}}</td>
                          <td style="text-align: center;">
                            <a href="{{ route('fasilitas.edit', $data->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>

                            <a href="{{ route('fasilitas.delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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