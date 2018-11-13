@extends('template.layouts.app')
@section('content')
<!-- Container fluid  -->
<div class="container-fluid">
	<!-- Start Page Content -->
	<div class="row">
		<div class="col-12">
			<div class="card">
			<div class="page-wrapper">
				<div class="card-body">
					<h4 class="card-title">Data Export Minuman</h4>
					<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
					<div class="table-responsive m-t-40">
						<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Nama Minuman</th>
									<th>Kategori Minuman</th>
									<th>Harga</h>
									<th>Deksripsi</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($minuman as $ngombe)
								<tr>
									<td>{{$ngombe->nama_minuman}}</td>
									<td>{{$ngombe->kategori}}</td>
									<td>{{$ngombe->harga}}</td>
									<td>{{$ngombe->deksripsi}}</td>
									<td class="text-center">
										<a href="{{route('minuman.edit', [$ngombe->id])}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float waves-light">
											<i class="fa fa-pencil"></i>                    
										</a>
										<form action="{{route('minuman.delete', [$ngombe->id])}}" method="post" class="d-inline-block">
										@csrf
											<button type="submit" class="btn btn-warning waves-effect">
											<i class="fa fa-trash"></i>  
											</button>                  
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
</div>
@endsection