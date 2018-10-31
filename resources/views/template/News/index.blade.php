@extends('template.layouts.app')
@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">List News</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">List News</li>
                    </ol>
                </div>
            </div>
   <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                  
                    <!-- /# column -->
                        <div class="card">
                            <div class="card-title">
                                <h4>Table Hover </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Gambar</th>
                                                <th>Waktu Dibuat	</th>
                                                <th>Pilihan	</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                             @php($no = 1 )
                                @foreach($news as $data)
                                            <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$data->judul}}</td>
            								  <td>{!!substr($data->isi,0,10) !!}....</td>
                                             <td>{{$data->gambar}}</td>
                                             <td>{{$data->created_at}}</td>
                                             <td>






                                       <a href="{{route('news.edit',[$data->id]) }} " class="btn btn-warning btn-rounded m-b-10 m-l-5"><i class="fa fa-edit"></i>Edit</a>

          
                              
                                    <a href="{{ route('news.delete',[$data->id]) }}"  class="btn btn-danger btn-rounded m-b-10 m-l-5" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o">Hapus</i></a>
                                             </td>

                                            </tr>
@endforeach                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <!-- End PAge Content -->
            </div>

 
                                               <!-- /# card -->
            
@endsection