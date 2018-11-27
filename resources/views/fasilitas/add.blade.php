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
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Tambah Fasilitas Baru</h4>
                    </div>
                            
                    <div class="card-body">
                        <form action="{{ url('fasilitas/save') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-body">
                            
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    
                                <div class="form-group">
                                    <label class="control-label">Nama Fasilitas</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Jumlah </label>
                                    <input type="number" class="form-control" name="jumlah">
                                </div>
                                                
                            
                                <div class="form-group">
                                    <label class="control-label">Deskripsi/Keterangan</label><br>
                                    <textarea style="width: 100%;" cols="30" rows="5" type="text" name="deskripsi"></textarea>
                                </div>

                         
                                </div>
                            </div>        
                        </div>

                        <div class="form-actions">
                           <button type="submit" class="btn btn-success" name="fasilitas.save"> <i class="fa fa-check"></i>&nbsp;Save</button>
                           <button type="button" class="btn btn-inverse"> <i class="fa fa-ban"></i> Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>

@endsection