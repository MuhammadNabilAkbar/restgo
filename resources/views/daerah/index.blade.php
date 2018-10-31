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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Provinsi</th>
                                                <th>Alamat</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Kota</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                                                                    
                                        <tbody>
                                            @foreach($datas as $data)
                                            <tr>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->provinsi}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>{{$data->kecamatan}}</td>
                                                <td>{{$data->kelurahan}}</td>
                                                <td>{{$data->kota}}</td>
                                                <td>
                                                    <a href="{{url('daerah/edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                                    <a href="{{url('daerah/delete', $data->id)}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach                                                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection