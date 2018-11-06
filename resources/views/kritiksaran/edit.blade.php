@extends('template.layouts.app')
@section('title', 'Kritik & Saran')
@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Kritik dan Saran</h3>
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
                    	<div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Ubah Kritik & Saran</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('kritiksaran.update') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $kritik->id }}">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama</label>
                                                    <input type="text" id="firstName" class="form-control" name="nama" value="{{ $kritik->nama }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Isi</label>
                                                    <input type="text" class="form-control" name="isi" value="{{ $kritik->isi }}">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    </div>
                                </form>
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