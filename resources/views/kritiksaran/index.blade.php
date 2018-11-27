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
                    	<div class="card">
                            <div class="card-title">
                                <h4>Daftar Kritik & Saran</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Kritik & Saran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<!-- @if(isset($kritiksarann)) -->
                                        	@foreach($kritiksarann as $no => $kritik)
                                        	{{ csrf_field() }}
                                            <tr>
                                                <th scope="row">{{ ($no+1) }}</th>
                                                <td>{{ $kritik->nama }}</td>
                                                <td>{{ $kritik->isi }}</td>
                                                <td>
                                                	<a href="{{route('kritiksaran.edit', $kritik->id)}}" class="btn btn-info" style="margin-right: 10px">Edit</button>
                                                	<a href="{{route('kritiksaran.delete', $kritik->id)}}" class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                            <!-- @endif -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>
@endsection